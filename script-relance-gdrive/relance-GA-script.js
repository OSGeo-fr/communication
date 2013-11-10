function sendEmail() {
  
  // définir les variables 
  var MAX_MAILING = 2; // Nombre maximal de relances
  
  var DELAY_DAYS = 180; // Nombre de jours entre chaque relance
  
  var REPLY_TO = "tresorier@osgeo.asso.fr"; // reply-to
  
  var SEND_REPORT = true; // envoi un rapport à l'adresse email REPLY_TO
  
  
  // *******************************
  // NE PAS EDITER
  // *******************************
  
  var SUBJECT = "osgeo-fr, pensez au renouvellement de votre cotisation!";
  
  var EXPIRE_SOON = "Votre cotisation à l'osgeo-fr arrivera à échéance dans moins de 10 jours";
  var EXPIRED = "Votre cotisation à l'osgeo-fr est arrivée à échéance il y a quelques mois déjà";
  
  var MSG  = "Bonjour {1},\n\n {2}. Votre soutien nous est précieux, vous pouvez le prolonger en renouvelant votre adhésion a notre association.";
      MSG += "\nPour cela, rendez vous sur notre site internet, à l'adresse suivante : http://osgeo.asso.fr/content/adh%C3%A9sion-ligne";
      MSG += "\nMerci pour votre soutien.";
      MSG += "\n\n--------------------";
      MSG += "\nL'équipe OSGEO-fr";
      
   var MSG_HTML  = "Bonjour {1},<br /><br /> {2}. Votre soutien nous est précieux, vous pouvez le prolonger en renouvelant votre adhésion a notre association.";
      MSG_HTML += "\n<br />Pour cela, rendez vous sur notre site internet ";
      MSG_HTML += "<a href=\"http://osgeo.asso.fr/content/adh%C3%A9sion-ligne\">en cliquant sur ce lien</a>.";
      MSG_HTML += "<br />Merci pour votre soutien";
      MSG_HTML += "<br /><br />--------------------";
      MSG_HTML += "<br />L'équipe OSGEO-fr";

  var sheet = SpreadsheetApp.getActiveSheet();
  var startRow = 2;  // First row of data to process
  var numRows = 150;   // Number of rows to process
  // Fetch the range of cells A2:U152
  var dataRange = sheet.getRange(startRow, 1, numRows, 20);
  // Fetch values for each row in the Range.
  var data = dataRange.getValues();
  var debug ='';

  
  for (i in data) {
    
    //préparation des données
    // ---------------------------------------------------------------------------
    
    var currentrow = startRow + parseInt(i);
    var row = data[i];
    var horodateur = row[0];  // Horodateur column
    var prenom = row[2];  // Prénom column
    var email = row[4];  // Email column
    var emailSentDate = row[13]; // Dernier rappel envoyé column (N)
    var nbEmailsSent = parseInt(row[14]);// Nb rappel (O)
    
    if(isNaN(nbEmailsSent)) {
      nbEmailsSent = 0;
    }

    // Plus de lignes à parcourir, on envoie le mail de logs
    // et on quite la fonction
    if(horodateur =='') {
      if(SEND_REPORT===true) {
        Logger.log(debug);
        MailApp.sendEmail(REPLY_TO, "osgeo script Log", Logger.getLog());
      }
      return false;
    } 
    else  {
      
      // on traite les enregistrements
      // ---------------------------------------------------------------------

      // on récupère la date du jour
      var today = new Date();
      var horodateplus = horodateur.setDate(horodateur.getDate()+355); // On récupère l'ensemble des enrgeistrements arrivant à échéance dans moins de 10 jours
      //MailApp.sendEmail(REPLY_TO, "osgeo script Log", horodateplus + ' ' + today.getTime());

      debug     += "#" + i + " adhérent : "+ prenom + " (" + email + ") - nbEmailsSent : " + nbEmailsSent;
      
      // on compare les dates et on s'assure que la limite de relance n'est pas atteinte
      if(horodateplus < today.getTime() && nbEmailsSent < MAX_MAILING) {
      
        // tmp var are necessary to make the replace function work.
        var tmp_msg_txt  = MSG;
        var tmp_msg_html = MSG_HTML;
        tmp_msg_txt = tmp_msg_txt.replace("{1}", prenom); // On ajoute le prénom de lutilisateur à l'email
        tmp_msg_html = tmp_msg_html.replace("{1}", prenom); // On ajoute le prénom de lutilisateur à l'email
        
        // si un email à déjà été envoyé on s'assure qu'un délai de X mois se soit écoulé avant 
        // d'en envoyer un autre
        if(nbEmailsSent > 0) {
        
              var date6MonthsFromValue = emailSentDate.setDate(emailSentDate.getDate()+DELAY_DAYS);

              if(date6MonthsFromValue < today.getTime()) {
                debug += " - Plus de " + DELAY_DAYS + " jours avant dernier envoi";
              } else {
                debug += " - Moins de " + DELAY_DAYS + " jours avant dernier envoi";
              }
              
        
              if(date6MonthsFromValue < today.getTime()) {
                  
                  tmp_msg_txt = tmp_msg_txt.replace("{2}", EXPIRED); // On ajoute le bon message
                  tmp_msg_html = tmp_msg_html.replace("{2}", EXPIRED); // On ajoute le bon message
                
                  advancedArgs = {replyTo:REPLY_TO,htmlBody:tmp_msg_html}; // On place les entêtes spécifiques
                  
                  // on essaie d'envoyer l'email et on gère l'exception si l'email fourni est incorrect
                  // afin d'éviter de faire planter le script
                  try {
                    MailApp.sendEmail(email, SUBJECT, tmp_msg_txt, advancedArgs);
                  } catch(e) {
                    Logger.log("Error with email (" + email + "). " + e);
                    debug += " - !!! Erreur avec l'email " + email + " !!! ";
                  }
                
                  debug += " - envoi de rappel";
                  // We update desired columns
                  // N Column - date of the day
                  sheet.getRange(currentrow, 14).setValue(today);
                  // O Column - Mails sents
                  sheet.getRange(currentrow, 15).setValue(parseInt(nbEmailsSent+1));
                  // Make sure the cell is updated right away in case the script is interrupted
                  SpreadsheetApp.flush();
                  
              } else {
                  debug += " - pas de rappel";
              }
        // sinon on l'envoie dans tous les cas
        } else {
          
          tmp_msg_txt = tmp_msg_txt.replace("{2}", EXPIRE_SOON); // On ajoute le bon message
          tmp_msg_html = tmp_msg_html.replace("{2}", EXPIRE_SOON); // On ajoute le bon message
          
          advancedArgs = {replyTo:REPLY_TO,htmlBody:tmp_msg_html}; // On place les entêtes spécifiques
          
          // on essaie d'envoyer l'email et on gère l'exception si l'email fourni est incorrect
          // afin d'éviter de faire planter le script
          try {
            MailApp.sendEmail(email, SUBJECT, tmp_msg_txt, advancedArgs);
          } catch(e) {
            Logger.log("Error with email (" + email + "). " + e);
            debug += " - !!! Erreur avec l'email " + email + " !!! ";
          }          
          
          debug += " - envoi de rappel";
          // We update desired columns
          // N Column - date of the day
          sheet.getRange(currentrow, 14).setValue(today);
          // O Column - Mails sents
          sheet.getRange(currentrow, 15).setValue(parseInt(nbEmailsSent+1));
          // Make sure the cell is updated right away in case the script is interrupted
          SpreadsheetApp.flush();
        }
      } //  closing if(horodateplus < today) test
      else {
        debug += " - pas de rappel";
      }
      debug +="\n";
    }
  }

}
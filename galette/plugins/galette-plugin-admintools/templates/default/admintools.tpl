    <section>
        <form action="" method="post">
            <fieldset>
                <legend class="ui-state-active ui-corner-top">{_T string="Content tools"}</legend>
                <div class="warningbox">
                    <p>{_T string="Make sure you've done a backup of the database before using any of the following tools!"}</p>
                </div>
                <article>
                    <p class="center">
                        <input name="inittexts" type="submit" value="{_T string="Reinitialize emails contents"}"/>
                        <input name="initfields" type="submit" value="{_T string="Reinitialize fields configuration"}"/>
                        <input name="initpdfmodels" type="submit" value="{_T string="Reinitialize PDF models"}"/>
                    </p>
                </article>
                <article>
                    <p class="center">
                        <input name="emptylogins" type="submit" value="{_T string="Generate values for empty logins and passwords"}"/>
                    </p>
                </article>
                <article>
                    <p class="center">
                        <input name="checkmodules" type="submit" value="{_T string="Check PHP modules"}"/>
                    </p>
                </article>
            </fieldset>
{if $smarty.const.TYPE_DB == 'mysql'}
            <fieldset>
                <legend class="ui-state-active ui-corner-top">{_T string="Database tools"}</legend>
                <div class="warningbox">
                    <p>{_T string="Make sure you've done a backup of the database before using any of the following tools!"}</p>
                </div>
                <article>
                    <p>
                        <span>{_T string="That function is available for MySQL installations only!"}</span><br/>
                        {_T string="Converts the whole database data to UTF-8, do not change anything on the tables, just proceed data conversion."}<br/>
                        {_T string="You should use that function if you can see strange characters in your datas; after a manual import, or if you've not used Galette's update scripts."}<br/>
                        {_T string="That conversion stuff will read your entire database, and write back each non UTF-8 values after conversion; this may take a while."}
                    </p>
                    <p class="center">
                        <input name="convert_encoding" type="submit" value="{_T string="Convert encoding"}"/>
                    </p>
                </article>
            </fieldset>
{/if}
        </form>
    </section>
{if isset($modules_res)}
    <section id="modules" title="{_T string="Modules report"}">
        {$modules_res}
    </section>
    <script type="text/javascript">
        $(function(){
            $('#modules').dialog({
                modal: true,
                hide: 'fold',
                width: '40%'
            });
        });
    </script>
{/if}

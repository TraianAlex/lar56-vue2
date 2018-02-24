<div :class="className">
    <div class="row">
        <div class="col-md-12">
            <tabs :centered="true">
                <tab name="All">
                    <gibberish-table></gibberish-table>
                </tab>
                <tab name="Create" selected="true">
                    <create-form></create-form>
                </tab>
            </tabs>
        </div>
    </div>
</div>
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><?php echo $subtitle_container ?></h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="table-responsive">
            <table id="mitabla" class="table table-bordered table-hover table-striped table-condensed">
                <thead>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tridents</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td><button id="demo-menu-lower-right"
                                    class="mdl-button mdl-js-button mdl-button--icon">
                                <i class="material-icons">more_vert</i>
                            </button>

                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                for="demo-menu-lower-right">
                                <li class="mdl-menu__item">Some Action</li>
                                <li class="mdl-menu__item">Another Action</li>
                                <li disabled class="mdl-menu__item">Disabled Action</li>
                                <li class="mdl-menu__item">Yet Another Action</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.box-body -->
    <!--    <div class="box-footer">
            Footer
        </div>-->
    <!-- /.box-footer-->
</div>
<!-- /.box -->
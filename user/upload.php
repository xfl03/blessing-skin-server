<?php
/**
 * @Author: printempw
 * @Date:   2016-03-18 21:41:21
 * @Last Modified by:   printempw
 * @Last Modified time: 2016-03-19 16:13:18
 */
require "../includes/session.inc.php";
$data['style'] = <<< 'EOT'
<link rel="stylesheet" href="../assets/css/user.style.css">
<link rel="stylesheet" href="../libs/iCheck/square/blue.css">
<link rel="stylesheet" href="../libs/bootstrap-fileinput/css/fileinput.min.css">
EOT;
$data['user'] = $user;
$data['page_title'] = "皮肤上传";
View::show('header', $data);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            皮肤上传
            <small>Skin Upload</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">上传</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">选择皮肤</label>
                            <input type="file" id="skininput" name="skininput" accept="image/png" />
                        </div>

                        <div class="form-group">
                            <label for="server">选择披风</label>
                            <input type="file" id="capeinput" name="capeinput" accept="image/png" />
                        </div>

                        <input type="radio" id="model-steve" name="model" />
                        <label class="model-label" for="model-steve">我的皮肤适合传统 Steve 皮肤模型</label><br />
                        <input type="radio" id="model-alex" name="model" />
                        <label class="model-label" data-toggle="tooltip" data-placement="bottom" title="提示：3D 预览暂时不支持 Alex 模型，预览可能会出现渲染错误。不要在意直接上传即可，游戏中显示是没有问题的。" for="model-alex">我的皮肤适合新版 Alex 皮肤模型</label><br />

                        <div id="msg" class="callout callout-info hide"></div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <button id="upload" class="btn btn-primary">确认上传</button>
                    </div>
                </div><!-- /.box -->
                <div class="box box-default">
                    <div class="box-body">
                        <b>提示：</b>目前3D 皮肤预览已经可以支持双层皮肤了miao。
                    </div>
                </div><!-- /.box -->
            </div>
            <div class="col-md-6">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">即时预览
                            <small><a id="preview" href="javascript:show2dPreview();">切换 2D 预览</a></small>
                            <div class="operations">
                                <i data-toggle="tooltip" data-placement="bottom" title="Movements" class="fa fa-pause"></i>
                                <i data-toggle="tooltip" data-placement="bottom" title="Running" class="fa fa-forward"></i>
                                <i data-toggle="tooltip" data-placement="bottom" title="Rotation" class="fa fa-repeat"></i>
                            </div>
                        </h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <?php View::show('preview', array('user'=>$user)); ?>
                    </div><!-- /.box-body -->
                </div>
            </div>
        </div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php
$data['script'] = <<< 'EOT'
<script type="text/javascript" src="../libs/iCheck/icheck.min.js"></script>
<script type="text/javascript" src="../libs/bootstrap-fileinput/js/fileinput.min.js"></script>
<script type="text/javascript" src="../libs/bootstrap-fileinput/js/fileinput_locale_zh.js"></script>
<script type="text/javascript" src="../assets/js/user.utils.js"></script>
<script type="text/javascript" src="../assets/js/upload.utils.js"></script>
EOT;
View::show('footer', $data); ?>

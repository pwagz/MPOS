<?php /* Smarty version Smarty-3.1.16, created on 2018-03-14 12:24:40
         compiled from "/var/www/html/MPOS/templates/bootstrap/dashboard/round_statistics/prop/round.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17753335775aa879d8de96c9-88947250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccd08013abfd2d8178f8db84b7398babeae8c78f' => 
    array (
      0 => '/var/www/html/MPOS/templates/bootstrap/dashboard/round_statistics/prop/round.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17753335775aa879d8de96c9-88947250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NETWORK' => 0,
    'ESTIMATES' => 0,
    'GLOBAL' => 0,
    'PRECISION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aa879d8e07806_75197426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa879d8e07806_75197426')) {function content_5aa879d8e07806_75197426($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_seconds_to_hhmmss')) include '/var/www/html/MPOS/public/../include/smarty/libs/plugins/modifier.seconds_to_hhmmss.php';
?>      <div class="panel-footer">
        <div class="row">
          <div class="col-lg-2 col-sm-6">
            <div class="circle-tile fade">
              <div class="circle-tile-heading lightblue">
                <i class="fa fa-th-large fa-fw fa-2x"></i>
              </div>
              <div class="circle-tile-content lightblue">
                <div class="circle-tile-description text-faded">
                  <p class="h5" id="b-nblock"><?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['block'];?>
</p>
                </div>
                <div class="circle-tile-number text-faded">
                  <p class="h6">Current Block</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-6">
            <div class="circle-tile fade">
              <div class="circle-tile-heading lightblue">
                <i class="fa fa-bar-chart-o fa-flip-horizontal fa-fw fa-2x"></i>
              </div>
              <div class="circle-tile-content lightblue">
                <div class="circle-tile-description text-faded">
                  <p class="h5" id="b-roundprogress"><?php echo number_format($_smarty_tpl->tpl_vars['ESTIMATES']->value['percent'],"2");?>
%</p>
                </div>
                <div class="circle-tile-number text-faded">
                  <p class="h6">Of Expected Shares</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-6">
            <div class="circle-tile fade">
              <div class="circle-tile-heading lightblue">
                <i class="fa fa-money fa-fw fa-2x"></i>
              </div>
              <div class="circle-tile-content lightblue">
                <div class="circle-tile-description text-faded">
                  <p class="h5" id="b-payout"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['payout'],$_smarty_tpl->tpl_vars['PRECISION']->value);?>
</p>
                </div>
                <div class="circle-tile-number text-faded">
                  <p class="h6"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 Est. Earnings</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-6">
            <div class="circle-tile fade">
              <div class="circle-tile-heading lightblue">
                <i class="fa fa-map-marker fa-fw fa-2x"></i>
              </div>
              <div class="circle-tile-content lightblue">
                <div class="circle-tile-description text-faded">
                  <p class="h5" id="b-diff"><?php echo number_format($_smarty_tpl->tpl_vars['NETWORK']->value['difficulty'],"8");?>
</p>
                </div>
                <div class="circle-tile-number text-faded">
                  <p class="h6">Difficulty</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-6">
            <div class="circle-tile fade">
              <div class="circle-tile-heading lightblue">
                <i class="fa fa-sitemap fa-fw fa-2x"></i>
              </div>
              <div class="circle-tile-content lightblue">
                <div class="circle-tile-description text-faded">
                  <p class="h5" id="b-nextdiff"><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['nethashrate']>0) {?><?php echo number_format($_smarty_tpl->tpl_vars['NETWORK']->value['EstNextDifficulty'],"8");?>
<?php } else { ?>n/a<?php }?></p>
                </div>
                <div class="circle-tile-number text-faded">
                  <p class="h6">Est Next Difficulty<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['nethashrate']>0) {?><br/>Change in <?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['BlocksUntilDiffChange'];?>
 Blocks<?php } else { ?>No Estimates<?php }?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-6">
            <div class="circle-tile fade">
              <div class="circle-tile-heading lightblue">
                <i class="fa fa-clock-o fa-fw fa-2x"></i>
              </div>
              <div class="circle-tile-content lightblue">
                <div class="circle-tile-description text-faded">
                  <p class="h5" id="b-esttimeperblock"><?php echo smarty_modifier_seconds_to_hhmmss($_smarty_tpl->tpl_vars['NETWORK']->value['EstTimePerBlock']);?>
</p>
                </div>
                <div class="circle-tile-number text-faded">
                  <p class="h6">Est. Avg. Time per Block</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php }} ?>

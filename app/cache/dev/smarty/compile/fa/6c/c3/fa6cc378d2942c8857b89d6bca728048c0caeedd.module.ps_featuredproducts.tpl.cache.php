<?php /* Smarty version Smarty-3.1.19, created on 2020-10-22 20:00:54
         compiled from "module:ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3342148915f91c8d63cc973-08362650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa6cc378d2942c8857b89d6bca728048c0caeedd' => 
    array (
      0 => 'module:ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl',
      1 => 1508771956,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '3342148915f91c8d63cc973-08362650',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'allProductsLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f91c8d63d5a10_97405375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f91c8d63d5a10_97405375')) {function content_5f91c8d63d5a10_97405375($_smarty_tpl) {?><!-- begin /var/www/roadmakshop/themes/classic/modules/ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl -->
<section class="featured-products clearfix">
  <h1 class="h1 products-section-title text-uppercase">
    <?php echo smartyTranslate(array('s'=>'Popular Products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

  </h1>
  <div class="products">
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
      <?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

    <?php } ?>
  </div>
  <a class="all-product-link float-xs-left float-md-right h4" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php echo smartyTranslate(array('s'=>'All products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
<i class="material-icons">&#xE315;</i>
  </a>
</section>
<!-- end /var/www/roadmakshop/themes/classic/modules/ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl --><?php }} ?>

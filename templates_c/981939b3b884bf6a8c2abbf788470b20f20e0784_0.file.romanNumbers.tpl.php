<?php
/* Smarty version 3.1.30, created on 2016-08-21 13:29:42
  from "/Applications/XAMPP/xamppfiles/htdocs/roman-numbers-converter/templates/romanNumbers.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties(
    $_smarty_tpl, array (
    'version' => '3.1.30',
    'unifunc' => 'content_57b990a6331938_61171202',
    'has_nocache_code' => false,
    'file_dependency' => 
    array (
    '981939b3b884bf6a8c2abbf788470b20f20e0784' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/roman-numbers-converter/templates/romanNumbers.tpl',
      1 => 1471778979,
      2 => 'file',
    ),
    ),
    'includes' => 
    array (
    ),
    ), false
)) {
    function content_57b990a6331938_61171202(Smarty_Internal_Template $_smarty_tpl) 
    {
        ?>
        <!DOCTYPE html>
        <html>
          <head>
        <meta charset="utf-8">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
    </title>
      <link href="components/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      </head>
      <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
    </a>
          </div>
        </div>
      </nav>

      <div class="container">
        <div class="starter-template">
          <h1>Roman Numbers Converter</h1>
          <p class="lead">Welcome to the best Roman Number Converter</p>
          <form action="index.php?action=convert" method="POST">
            <div class="form-group">
              <label for="arabicNumber">Arabic Number</label>
              <input type="number" class="form-control" id="arabicNumber" name="arabicNumber" placeholder="Insert Arabic Number">
            </div>
            <button type="submit" class="btn btn-default">Convert</button>
          </form>
            <?php if ($_smarty_tpl->tpl_vars['romanNumber']->value) {?>
          <h1>The roman number converted is: <?php echo $_smarty_tpl->tpl_vars['romanNumber']->value;?>
</h1>
            <?php }?>
        </div>
      </div>

        <?php echo '<script'; ?>
     src="components/jquery/jquery.min.js"><?php echo '</script'; ?>
    >
        <?php echo '<script'; ?>
     src="components/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
    >
    </body>
      </html>
    <?php }
}

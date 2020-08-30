<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 11:11:37
  from '/Applications/MAMP/htdocs/Original-Application/scr-image/libs/templates/calendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b0ad93cde29_61394617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bd34e2543e94aafd15ad2035a14275438c1c0c3' => 
    array (
      0 => '/Applications/MAMP/htdocs/Original-Application/scr-image/libs/templates/calendar.tpl',
      1 => 1598753496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b0ad93cde29_61394617 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>PHPカレンダー</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <style>
        .container {
            font-family: 'Noto Sans JP', sans-serif;
            margin-top: 80px;
        }
        h3 {
            margin-bottom: 30px;
        }
        th {
            height: 30px;
            text-align: center;
        }
        td {
            height: 100px;
        }
        .today {
            background: orange;
        }
        th:nth-of-type(1), td:nth-of-type(1) {
            color: red;
        }
        th:nth-of-type(7), td:nth-of-type(7) {
            color: blue;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3><a href="?ym=<?php echo '<?php ';?>
echo $prev; <?php echo '?>';?>
">&lt;</a> <?php echo '<?php ';?>
echo $html_title; <?php echo '?>';?>
 <a href="?ym=<?php echo '<?php ';?>
echo $next; <?php echo '?>';?>
">&gt;</a></h3>
        <table class="table table-bordered">
            <tr>
                <th>日</th>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th>土</th>
            </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['weeks']->value, 'week');
$_smarty_tpl->tpl_vars['week']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['week']->value) {
$_smarty_tpl->tpl_vars['week']->do_else = false;
?>
                    <td><?php echo $_smarty_tpl->tpl_vars['week']->value;?>
</td>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
</body>
</html><?php }
}

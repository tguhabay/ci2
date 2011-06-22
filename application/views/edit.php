<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Data User</title>
  </head>
  <body>
    <div id="form_input" title="Edit Data">
      <table>
        <?php echo validation_errors(); ?>
        <?php echo form_open('user/submit'); ?>
        <tr >
            <td> <?php echo form_label('User Name : '); ?></td><?php echo form_hidden('id',$id); ?>
            <td> <?php echo form_input('username',$username,'id="username"'); ?></td>
        </tr>
        <tr>
            <td> <?php echo form_label('Password : ');?> </td>
            <td> <?php echo form_password('password','','id="password"'); ?></td>
        </tr>
         <tr>
            <td> <?php echo form_label('Repeat Password : ');?> </td>
            <td> <?php echo form_password('passconf','','id="passconf"'); ?></td>
        </tr>
        <tr>
            <td> <?php echo form_label('Full Name : ');?> </td>
            <td> <?php echo form_input('fullname', $fullname,'id="fullname"'); ?></td>
        </tr>
        <tr>
                <td><?php echo form_submit('submit','Save')?>
        </tr>
      </table>
      </div>
  </body>
</html>
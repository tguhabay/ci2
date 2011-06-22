<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Data User</title>
  </head>
  <body>
    <div id="form_input" title="Input / Edit Data">
      <table>
        <?php echo validation_errors(); ?>
        <?php echo form_open('user/submit'); ?>
        <tr >
            <td> <?php echo form_label('User Name : '); ?></td>
            <td> <?php echo form_input('username',set_value('username'),'id="username"'); ?></td>
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
            <td> <?php echo form_input('fullname', set_value('fullname'),'id="fullname"'); ?></td>
        </tr>
        <tr>
                <td><?php echo form_submit('submit','Save')?>
        </tr>
      </table>
      </div>
      <div id="show">
        <?php $this->load->view('show'); ?>
    </div>
    </div>
  </body>
</html>
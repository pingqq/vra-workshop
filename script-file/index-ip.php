<table>	  
        <font style="color:#FFF;"><?php $os = explode(' ', php_uname()); echo $os[0]; ?> + <?php echo ('/'==DIRECTORY_SEPARATOR ? $os[2] : $os[1]); ?></font>		
        </tr>	  
          <td>Server Name :</td>
		  <td><?php if('/'==DIRECTORY_SEPARATOR ){echo $os[1];}else{echo $os[2];} ?></td>
		  <td>Web SoftWare :</td>
          <td><?php echo $_SERVER['SERVER_SOFTWARE']; ?></td>
        </tr>
		<tr>
          <td>Server IP :</td>
		  <?php
          function randColor(){
          $colors=array('4231D2','D24231','3171D2','A7D231');
          $show_color = array_rand($colors, 1);
          return $colors[$show_color];
          }
          ?>	  
		  <td><?php $SERVER = $_SERVER['SERVER_ADDR']; echo '<span style="color: #'.randColor().'">'.$SERVER.'</span>';?></td>
		  <td>Client IP :</td>
          <td><?php echo @$_SERVER['REMOTE_ADDR']; ?></td>
        </tr>  
        <tr>
          <td>Server OS :</td>
          <td><?php $os = explode(' ', php_uname()); echo $os[0]; ?></td>
          <td>Kernel Version :</td>
          <td><?php echo ('/'==DIRECTORY_SEPARATOR ? $os[2] : $os[1]); ?></td>
        </tr>	  	
        <tr>
          <td>Server Port :</td>
          <td><?php echo $_SERVER['SERVER_PORT']; ?></td>
          <td>Absolute Path :</td>
          <td><?php echo $_SERVER['DOCUMENT_ROOT'] ? str_replace('\\','/',$_SERVER['DOCUMENT_ROOT']) : str_replace('\\','/',dirname(__FILE__)); ?></td> 		  
      </table>
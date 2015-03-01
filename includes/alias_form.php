<!-- Request making form -->

<table>
    <form method = 'post' action = 'alias_request.php'>
        <tr>
            <td>Name:</td>
            <td><input name = 'name' type = 'text' required = 'required' /> </td>
        </tr>
        <tr>
            <td>Roll Number: </td>
            <td><input name = 'rollno' type = 'number' required = 'required' /> </td>
        </tr>
        <tr>
            <td>Your E-mail address: </td>
            <td><input name = 'email' type = 'email' required = 'required' /> </td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
			<?php
				$url = 'http://api.textcaptcha.com/7g8bn23tjxssgcok88cgsswwk9nsboer';
				try {
					$xml = @new SimpleXMLElement($url,null,true);
				} catch (Exception $e) {
					$fallback = '<captcha>'.
      					'<question>Is ice hot or cold?</question>'.
            			'<answer>'.md5('cold').'</answer></captcha>';
              		$xml = new SimpleXMLElement($fallback);
				}
				$question = (string)$xml->question;
            	echo "<td align='right'><b>";
            	echo $question;
            	$ans = array();
            	foreach($xml->answer as $hash)
                	$ans[] = (string) $hash;
                $_SESSION['captcha']= $ans;
            	echo "</b></td>";
             	echo "<td><input type='text' name='paste_captcha' size='20' placeholder='Enter your answer here'></td>";
			?>
		</tr>
        <tr>
            <td><input type = 'submit' name = 'submit_request' value = 'Submit Request' style = 'background-color:#044077; padding:5px 15px; color:#FFFFFF;'/>
            <input type = 'reset' style = 'background-color:#044077; padding:5px 15px; color:#FFFFFF;'/>
            </td>
        </tr>
    </form>
</table>

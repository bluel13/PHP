<?php
if(isset($_GET['account'])){
    $account=$_GET['account'];
    $passwd=$_GET['passwd'];
    $realname=$_GET['realname'];
    $sql="insert into member (account,passwd,realname)".
          "values ('{$account}','{$passwd}','{$realname}')";
    $db = @new mysqli('127.0.0.1','root','root','ioi');
    $db->query ($sql);
    header("Locaiton:login.php");
}





?>
<from>
    <table>
        <tr>
            <th>Account</th>
            <td><input type="text" name="account"></td>
        </tr>

        <tr>
            <th>Password</th>
            <td><input type="password" name="passwd"></td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" value="New"></td>
        </tr>
    </table>
</from>
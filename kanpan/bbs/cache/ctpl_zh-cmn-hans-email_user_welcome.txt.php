<?php if (!defined('IN_PHPBB')) exit; ?>Subject: 欢迎光临 "<?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>"

<?php echo (isset($this->_rootref['WELCOME_MSG'])) ? $this->_rootref['WELCOME_MSG'] : ''; ?>


请妥善保管这封信件。您的帐户信息如下所示：

----------------------------
用户名：<?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>


论坛链接: <?php echo (isset($this->_rootref['U_BOARD'])) ? $this->_rootref['U_BOARD'] : ''; ?>

----------------------------

请注意避免遗失密码，因为数据库中保存的密码已被加密。如果遗忘密码，您可以重新申请一个，并通过与激活此账户相同的方式激活它。

感谢您的注册！

<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>
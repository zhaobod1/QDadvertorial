
            ╭───────────────────────╮
    ────┤           支付宝代码示例结构说明             ├────
            ╰───────────────────────╯ 
　                                                                  
　       接口名称：支付宝即时到账交易接口（create_direct_pay_by_user）
　 　    代码版本：3.3
         开发语言：PHP
         版    权：支付宝（中国）网络技术有限公司
　       制 作 者：支付宝商户事业部技术支持组
         联系方式：商户服务电话0571-88158090

    ─────────────────────────────────

───────
 代码文件结构
───────

create_direct_pay_by_user-php-UTF-8
  │
  ├lib┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈类文件夹
  │  │
  │  ├alipay_core.function.php ┈┈┈┈┈┈支付宝接口公用函数文件
  │  │
  │  ├alipay_notify.class.php┈┈┈┈┈┈┈支付宝通知处理类文件
  │  │
  │  ├alipay_submit.class.php┈┈┈┈┈┈┈支付宝各接口请求提交类文件
  │  │
  │  └alipay_md5.function.php┈┈┈┈┈┈┈支付宝接口MD5函数文件
  │
  ├log.txt┈┈┈┈┈┈┈┈┈┈
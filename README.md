# yii2-sepet
Depoya Ürün Ekleme ve Depodan Gönderilen Ürünleri Listeleyen Modülü

# Kurulum
Kurulum için öncelikle Vagrant sanal makinesine ssh ile bağlanınız. Ardından yii projenizin ana dizinine gidiniz (/var/www/advanced).
 `composer require --prefer-dist mustafayigit34/yii2-sepet "dev-main"` komutunu kullanarak modül kurulumunu gerçekleştiriniz. <br>
 
Daha sonra backend\config\main.php dizinine giderek aşağıdaki düzenlemeyi gerçekleştiriniz.
```
'modules' => [
        'sepet' =>[
            'class' => 'backend\modules\sepet\Module'
        ]
    ],
```

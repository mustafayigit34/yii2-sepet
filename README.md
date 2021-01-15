# yii2-sepet
Depoya Ürün Ekleme ve Depodan Gönderilen Ürünleri Listeleyen Modülü

# Kurulum
1- Kurulum için öncelikle Vagrant sanal makinesine ssh ile bağlanınız. Ardından yii projenizin ana dizinine gidiniz (/var/www/advanced).<br>
 `composer require --prefer-dist mustafayigit34/yii2-sepet "dev-main"` komutunu kullanarak modül kurulumunu gerçekleştiriniz. <br><br>
2- Daha sonra backend\config\main.php dizinine giderek aşağıdaki düzenlemeyi gerçekleştiriniz.
```
'modules' => [
        'sepet' =>[
            'class' => 'backend\modules\sepet\Module'
        ]
    ],
``` 
<br>
3- Migration işlemini gerçekleştirmek için ssh kullanarak proje dizinine gidiniz ve aşağıdaki kod satırı ile modüldeki tabloların kurulumunu yapınız.<br>
`php yii migrate/up --migrationPath=@vendor/sevkikaragol/yii2-note/src/migrations`<br>

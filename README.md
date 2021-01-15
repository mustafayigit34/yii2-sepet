# yii2-sepet
Depoya Ürün Ekleme ve Depodan Gönderilen Ürünleri Listeleyen Modülü

# Kurulum
1- Kurulum için öncelikle Vagrant sanal makinesine ssh ile bağlanınız. Ardından yii projenizin ana dizinine gidiniz (/var/www/advanced).<br>
 `composer require --prefer-dist mustafayigit34/yii2-sepet "dev-main"` komutunu kullanarak modül kurulumunu gerçekleştiriniz. <br><br>
2- Daha sonra backend\config\main.php dizinine giderek aşağıdaki düzenlemeyi gerçekleştiriniz.
```
'modules' => [
        'sepet' =>[
            'class' => 'mustafayigit34\sepet\Module'
        ]
    ],
``` 
<br>
3- Migration işlemini gerçekleştirmek için ssh kullanarak proje dizinine gidiniz ve aşağıdaki kod satırı ile modüldeki tabloların kurulumunu yapınız.<br>

`php yii migrate/up --migrationPath=@vendor/mustafayigit34/yii2-sepet/src/migrations`

Kurulum aşaması bitmiş bulunmaktadır.<br>
http://advanced/backend/web/index.php?r=sepet/sepet/index adresinden modüle erişebilirsiniz.

# Modül İçeriği
### Veritabanı (Migrations):
Modül içerisinde iki adet tablo bulunmaktadır ve ikisinin de içeriği şu şekildedir:
* Depoya eklenen ürünleri ve özelliklerini tutan tablo
* Depodan silinen ürünleri ve özelliklerini tutan tablo
İki tablo da veritipi olarak aynı değişkenleri tutmaktadır.
![Adsız](https://user-images.githubusercontent.com/65903573/104784028-6ff67380-5798-11eb-8e36-dd9e57c76202.png)<br>
Modül Tablolarının Genel Yapısı


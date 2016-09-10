# Hey guys, !!!

สำหรับทุกคนที่ clone โปรเจ็คในครั้งแรก ให้ทำการตั้งค่าพื้นฐานดังต่อไปนี้

## การเริ่มต้นโปรเจ็ค

เมื่อ clone โปรเจ็คมาแล้ว โปรดสร้างไฟล์ app\Config\database.php เพื่อใช้เชื่อมต่อฐานข้อมูลโดยมีตังอย่างดังนี้

class DATABASE_CONFIG {

    public $default = array(
        'datasource' => 'Database/Mysql',
				'persistent' => false,
				'host' => 'localhost',
				'login' => 'root',
				'password' => 'root',
				'database' => 'cake1',
				'prefix' => '',
				//'encoding' => 'utf8'
    );
}

สร้างโฟลเดอร์ app\tmp\ โดยมีโครงสร้างโฟลเดอร์ดังนี้

app\tmp\cache\models

app\tmp\cache\persistent

app\tmp\cache\views

app\tmp\logs

app\tmp\sessions

app\tmp\tests


=================== ขอให้สนุกกับการทำโปคเจ็ค ^^ ==========================

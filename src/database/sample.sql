select
umenus.id as umenu_id
,umenus.name as umenu_name
,items.id as item_id
,items.name as item_name
,items.price as item_price
from usual_menu_items as umenu_items
left outer join usual_menus as umenus
on umenu_items.usual_menu_id = umenus.id
left outer join items as items
on umenu_items.item_id = items.id
;


select
distinct(umenus.name) as umenu_name
from usual_menu_items as umenu_items
left outer join usual_menus as umenus
on umenu_items.usual_menu_id = umenus.id
left outer join items as items
on umenu_items.item_id = items.id
;


Controllerの中でSQLで複数テーブルからほしいカラムを抽出する
↓
Viewにわたす
↓
Viewの中で取り出して表示

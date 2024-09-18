@if($row->layout_id == 1)
    <span>لندینگ پیج یک</span>
@elseif($row->layout_id ==2)
    <span>لندینگ پیج دو</span>
@elseif($row->layout_id ==3)
    <span>طرح پیش فرض</span>
@elseif($row->layout_id ==4)
    <span>طرح سفارشی</span>
@endif

<?php
     function block_test() {
         
    $content = 'BAC';
    $NV_BASE_SITEURL = NV_BASE_SITEURL;
    
    $xtpl = new XTemplate('global.test.tpl', NV_ROOTDIR . '/themes/default/blocks');
    $xtpl->assign( 'NV_BASE_SITEURL', NV_BASE_SITEURL );
    //$xtpl -> assign('LANG', $lang_global);
    $row = array();
    $row[1] = array('title'=>'Đánh giá Sony Xperia T2 Ultra - phablet 2 SIM giá cao',
                     'description'=>'Sony Xperia T2 Ultra mẫu điện thoại mới nhất hiện nay',
                     'images'=>'uploads/news/anh1.jpg'   
                    );
    $row[2] = array('title'=>'Đánh giá Sony Xperia z1',
                     'description'=>'Sony Xperia z1 điện thoại bán chạy nhất hiện nay',
                     'images'=>'uploads/news/anh2.jpg'   
    );
    $row[3] = array('title'=>'Đánh giá Sony Xperia z2',
                     'description'=>'Sony Xperia z2 điện thoại bán chạy nhất 5 năm trên toàn thế giới ',
                     'images'=>'uploads/news/anh3.jpg'   
    );
    $row[4] = array('title'=>'Đánh giá Sony Xperia z3',
                     'description'=>'Sony Xperia z3 đang được hãng sony nâng cấp tính năng và kích thước',
                     'images'=>'uploads/news/anh4.jpg'   
    );
    $datarow = count($row);
    //print_r($datarow);die;                  
    for ($i=1; $i <= $datarow; $i++) { 
                
        $xtpl->assign('DATA', $row[$i]);    
        $xtpl -> parse('main.loop');
    }    
        
    $xtpl -> parse('main');
    return $xtpl -> text('main');
    }
    
    $content = block_test();
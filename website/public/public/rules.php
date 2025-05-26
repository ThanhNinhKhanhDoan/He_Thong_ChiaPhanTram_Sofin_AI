<?php
$params = path_urls();
if (isset($params[1])) {
	$param = $params[1];
} else {
	$param = "home";
}

$menus = '
    <li class="nav-item">
        <a class="nav-link ' . ($param === 'home' ? ' active' : '') . '" href="' . set_route_to_link([]) . '">
            <span class="vi">TRANG CHỦ</span>
            <span class="en">HOME</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link ' . ($param === 'AI' ? ' active' : '') . '" href="' . set_route_to_link(["public","AI"]) . '">
            <span class="vi">SOFIN AI</span>
            <span class="en">SOFIN AI</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link ' . ($param === 'training' ? ' active' : '') . '" href="' . set_route_to_link(["public","training"]) . '">
            <span class="vi">ĐÀO TẠO</span>
            <span class="en">TRAINING</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link ' . ($param === 'content-distribution' ? ' active' : '') . '" href="' . set_route_to_link(["public","content-distribution"]) . '">
            <span class="vi">PHÂN PHỐI NỘI DUNG</span>
            <span class="en">CONTENT DISTRIBUTION</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link ' . ($param === 'connect' ? ' active' : '') . '" href="' . set_route_to_link(["public","connect"]) . '">
            <span class="vi">KẾT NỐI</span>
            <span class="en">CONNECT</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link ' . ($param === 'contact' ? ' active' : '') . '" href="' . set_route_to_link(["public","contact"]) . '">
            <span class="vi">LIÊN HỆ</span>
            <span class="en">CONTACT</span>
        </a>
    </li>
';

require $pathFileIndex;
?>
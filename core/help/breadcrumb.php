
<?php
function is_path_folder ($db,$dataUsers) {
    if (isset($_GET['path'])) {
        if (strlen($_GET['path']) < 6) {
            $path_folder = $dataUsers['email'];
        } else {
            $path_folder = string_safe($_GET['path']);
        }
    } else {
        $path_folder = $dataUsers['email'];
    }
    
    
    $where = [
	    'path_full' => $path_folder,
	    'user_id' => $dataUsers['_id']->__toString()
	];
    $count_path_folder = $db->count("file_manager_file", $where);
    if ($count_path_folder > 0) {
		return true;
	} else {
	    return false;
	}
}

function is_path_file ($db,$dataUsers,$table) {
    if (isset($_GET['path'])) {
        if (strlen($_GET['path']) < 6) {
            $path_folder = $dataUsers['email'];
        } else {
            $path_folder = string_safe($_GET['path']);
        }
    } else {
        $path_folder = $dataUsers['email'];
    }
    
    
    $where = [
	    'path_full' => $path_folder,
	    'user_id' => $dataUsers['_id']->__toString()
	];
    $count_path_folder = $db->count($table, $where);
    if ($count_path_folder > 0) {
		return true;
	} else {
	    return false;
	}
}

function get_menu($dataUsers) {
    if (isset($_GET['path'])) {
        if (strlen($_GET['path']) < 6) {
            $path_folder = $dataUsers['email'];
        } else {
            $path_folder = string_safe($_GET['path']);
        }
    } else {
        $path_folder = $dataUsers['email'];
    }
    $path_folder = rtrim($path_folder, '/');
    $path_folder = ltrim($path_folder, '/');
    
    $urlFolder = set_route_to_link(["public","file_manager","index"]);
    $paths = explode('/', $path_folder);
    if (count($paths) == 1) {
        $breadcrumb = '
        <ol class="breadcrumb breadcrumb-style2 mb-0">
            <li class="breadcrumb-item"><a href="'.$urlFolder.'"><i class="ti ti-home-2 me-1 fs-15 d-inline-block"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page"></li>
        </ol>';
    } else {
        $li = '';
        $path_sub_url = "";
        $i = 0;
        $lastElement = end($paths);
        foreach ($paths as $key => $sub_path) {
    
            $path_sub_url = $path_sub_url."/".$sub_path;
            $path_sub_url = rtrim($path_sub_url, '/');
            $path_sub_url = ltrim($path_sub_url, '/');
            if ($lastElement !== $sub_path) {
                if ($key == $sub_path) {
                    $itemLi = '<li class="breadcrumb-item active" aria-current="page">'.$sub_path.'</li>';
                } else {
                    if ($i == 0) {
                        $itemLi = '<li class="breadcrumb-item"><a href="'.$urlFolder.'"><i class="ti ti-home-2 me-1 fs-15 d-inline-block"></i></a></li>';
                    } else {
                        $itemLi = '<li class="breadcrumb-item"><a href="'.$urlFolder.'/?path='.$path_sub_url.'"> '.$sub_path.'</a></li>';
                    }
                }
            } else {
                $itemLi = '<li class="breadcrumb-item"> '.$sub_path.'</li>';
            }
            $li = $li."".$itemLi;
            $i++;
        }
        $breadcrumb = '
        <ol class="breadcrumb breadcrumb-style2 mb-0">
            '.$li.'
        </ol>';
    }
    
    return '<input type="hidden" id="path_folder" value="'.$path_folder.'">
<div class="card custom-card">
    <div class="card-body">
    <div class="">
        <div class="float-start">
            <nav aria-label="breadcrumb">
                '.$breadcrumb.'
            </nav>
        </div>
        <div class="float-end">
            <i class="fa-solid fa-copy fa-beat" type="button" title="copy path" text-data-copy="'.$path_folder.'" onclick="copyText(this)"></i>
        </div>
    </div>
    </div>
</div>
<!---<div class="card custom-card" id="html_treeview_head">
    <div class="card-header">
        <div class="card-title">File treeview</div>
        <div>
            <div class="float-end mb-0">
            </div>
        </div>
    </div>
    <div class="card-body">
        <div id="html-load-treeview" class="demo">
            <button type="button" class="btn btn-primary" onclick="load_file_treeview()">Show</button>
        </div>
    </div>
</div>--->



';
}
?>
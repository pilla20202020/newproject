<?php

    use App\Modules\Models\User;

    
    function getTableHtml($object, $type, $editRoute = null, $deleteRoute = null) {
        switch($type) {
            case 'actions': 
            return view('general.table-actions',compact('editRoute','deleteRoute'));
            break;

            case 'availability':
                return '<span class="badge-boxed'.getLabel($object->availability).'">'.$object->availability_text .'</span>';
                break;
            case 'visibility':
                return '<span class="badge-boxed'.getLabel($object->visibility).'">'.$object->visibility_text .'</span>';
                break;
            case 'status':
                return '<span class="badge-boxed'.getLabel($object->status).'">'.$object->status_text .'</span>';
                break;
            case 'image': 
                return view('general.lightbox',compact('object'));
                break;
        }
    }


    function getLabel($status) {
        $badge = '';
        switch($status) {
            case 'yes' :
                $badge = 'badge-primary';
                break;

            case 'no' :
                $badge = 'badge-danger';
                break;
            case 'available' :
                $badge = 'badge-primary';
                break;

            case 'not_available' :
                $badge = 'badge-danger';
                break;
            case 'visible' :
                $badge = 'badge-primary';
                break;

            case 'active' :
                $badge = 'badge-danger';
                break;
                $badge = 'badge-primary';
                break;

            case 'inactive' :
                $badge = 'badge-danger';
                break;
            
        }

        return $badge;
            
    }



?>
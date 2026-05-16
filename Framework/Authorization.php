<?php

namespace Framework;

use Framework\Session;

class Authorization
{
    /**
     * Check if logged in user owns a lisitng
     * 
     * @params int $resourceID
     * @return bool
     */

    public static function isOwner($resourceID)
    {
        $sessionUser = Session::get('user');

        if ($sessionUser !== null && isset($sessionUser['id'])) {
            $sessionUserID = (int) $sessionUser['id'];

            return $sessionUserID === (int) $resourceID;
        }

        return false;
    }
}


// //Authorization
// if (Session::get('user')['id'] !== $listing->user_id) {
//     $_SESSION['error_message'] = 'You are not authorized to delete this listing!';
//     return redirect('/listings/' . $listing->id);
// }

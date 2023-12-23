<?php

namespace App\Enums;

enum TokenType: string
{
    const SUPER_ADMIN_TOKEN  = 'superAdminToken';
    const NORMAL_USER_TOKEN = 'normalToken';
    const TYPE = 'Bearer';
}

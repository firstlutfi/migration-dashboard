<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Dashboard extends Model
{
    protected $table = "portal_organization_migrate";

    public static function getAllDataForTable(Request $request){
        $data = DB::table('portal_organization_migrate')
        ->selectRaw("portal_organization_migrate.org_id,
        portal_organization.org_name,
        portal_organization_migrate.orgmigrate_laststate,
        case
            when position('[Jurnal Message]' in portal_organization_migrate.orgmigrate_message) > 0 then substring(portal_organization_migrate.orgmigrate_message, position('[Jurnal Message]' in portal_organization_migrate.orgmigrate_message), position ('{' in portal_organization_migrate.orgmigrate_message)-position('[Jurnal Message]' in portal_organization_migrate.orgmigrate_message)-1)
            when substring(portal_organization_migrate.orgmigrate_message, 1, 4) = '2019' then substring(portal_organization_migrate.orgmigrate_message, 21)
            else portal_organization_migrate.orgmigrate_message
        end orgmigrate_message,
        case
            when position('{' in portal_organization_migrate.orgmigrate_message) > 0 then substring(portal_organization_migrate.orgmigrate_message, position('{' in portal_organization_migrate.orgmigrate_message))
            else portal_organization_migrate.orgmigrate_message
        end message,
        case 
            when substring(portal_organization_migrate.orgmigrate_message, 1, 4) = '2019' then
            substring(portal_organization_migrate.orgmigrate_message,9,2)||'/'||substring(portal_organization_migrate.orgmigrate_message,6,2)||'/'||substring(portal_organization_migrate.orgmigrate_message,1,4)
        end date_execute,
        portal_organization.org_bill_email")
        ->leftJoin('portal_organization', 'portal_organization.org_id', '=', 'portal_organization_migrate.org_id')
        ->where('portal_organization_migrate.org_id', '>', '857')
        ->whereRaw('portal_organization_migrate.org_id not in(860, 867, 872, 873, 892, 895, 952, 982, 992, 993, 1029, 1012, 1059, 1072, 1096, 1112, 1114, 1193, 1242, 1292, 1280, 874)')
        ->whereRaw("(portal_organization_migrate.orgmigrate_message not ilike '%successfully%' and portal_organization_migrate.orgmigrate_message not ilike '%fileAttachment%')")
        ->paginate(15);
        return $data;
    }

}

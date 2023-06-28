<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 18,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 19,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 20,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 21,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 22,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 23,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 24,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 25,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 26,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 27,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 28,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 29,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 30,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 31,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 32,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 33,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 34,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 35,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 36,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 37,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 38,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 39,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 40,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 41,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 42,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 43,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 44,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 45,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 46,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 47,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 48,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 49,
                'title' => 'product_create',
            ],
            [
                'id'    => 50,
                'title' => 'product_edit',
            ],
            [
                'id'    => 51,
                'title' => 'product_show',
            ],
            [
                'id'    => 52,
                'title' => 'product_delete',
            ],
            [
                'id'    => 53,
                'title' => 'product_access',
            ],
            [
                'id'    => 54,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 55,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 56,
                'title' => 'asset_management_access',
            ],
            [
                'id'    => 57,
                'title' => 'asset_category_create',
            ],
            [
                'id'    => 58,
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => 59,
                'title' => 'asset_category_show',
            ],
            [
                'id'    => 60,
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => 61,
                'title' => 'asset_category_access',
            ],
            [
                'id'    => 62,
                'title' => 'asset_location_create',
            ],
            [
                'id'    => 63,
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => 64,
                'title' => 'asset_location_show',
            ],
            [
                'id'    => 65,
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => 66,
                'title' => 'asset_location_access',
            ],
            [
                'id'    => 67,
                'title' => 'asset_status_create',
            ],
            [
                'id'    => 68,
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => 69,
                'title' => 'asset_status_show',
            ],
            [
                'id'    => 70,
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => 71,
                'title' => 'asset_status_access',
            ],
            [
                'id'    => 72,
                'title' => 'asset_create',
            ],
            [
                'id'    => 73,
                'title' => 'asset_edit',
            ],
            [
                'id'    => 74,
                'title' => 'asset_show',
            ],
            [
                'id'    => 75,
                'title' => 'asset_delete',
            ],
            [
                'id'    => 76,
                'title' => 'asset_access',
            ],
            [
                'id'    => 77,
                'title' => 'assets_history_access',
            ],
            [
                'id'    => 78,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 79,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 80,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 81,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 82,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 83,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 84,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 85,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 86,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 87,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 88,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 89,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 90,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 91,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 92,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 93,
                'title' => 'task_create',
            ],
            [
                'id'    => 94,
                'title' => 'task_edit',
            ],
            [
                'id'    => 95,
                'title' => 'task_show',
            ],
            [
                'id'    => 96,
                'title' => 'task_delete',
            ],
            [
                'id'    => 97,
                'title' => 'task_access',
            ],
            [
                'id'    => 98,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 99,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 100,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 101,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 102,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 103,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 104,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 105,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 106,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 107,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 108,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 109,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 110,
                'title' => 'expense_create',
            ],
            [
                'id'    => 111,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 112,
                'title' => 'expense_show',
            ],
            [
                'id'    => 113,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 114,
                'title' => 'expense_access',
            ],
            [
                'id'    => 115,
                'title' => 'income_create',
            ],
            [
                'id'    => 116,
                'title' => 'income_edit',
            ],
            [
                'id'    => 117,
                'title' => 'income_show',
            ],
            [
                'id'    => 118,
                'title' => 'income_delete',
            ],
            [
                'id'    => 119,
                'title' => 'income_access',
            ],
            [
                'id'    => 120,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 121,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 122,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 123,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 124,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 125,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 126,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 127,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 128,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 129,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 130,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 131,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 132,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 133,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 134,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 135,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 136,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 137,
                'title' => 'currency_create',
            ],
            [
                'id'    => 138,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 139,
                'title' => 'currency_show',
            ],
            [
                'id'    => 140,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 141,
                'title' => 'currency_access',
            ],
            [
                'id'    => 142,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 143,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 144,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 145,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 146,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 147,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 148,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 149,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 150,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 151,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 152,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 153,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 154,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 155,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 156,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 157,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 158,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 159,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 160,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 161,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 162,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 163,
                'title' => 'client_create',
            ],
            [
                'id'    => 164,
                'title' => 'client_edit',
            ],
            [
                'id'    => 165,
                'title' => 'client_show',
            ],
            [
                'id'    => 166,
                'title' => 'client_delete',
            ],
            [
                'id'    => 167,
                'title' => 'client_access',
            ],
            [
                'id'    => 168,
                'title' => 'project_create',
            ],
            [
                'id'    => 169,
                'title' => 'project_edit',
            ],
            [
                'id'    => 170,
                'title' => 'project_show',
            ],
            [
                'id'    => 171,
                'title' => 'project_delete',
            ],
            [
                'id'    => 172,
                'title' => 'project_access',
            ],
            [
                'id'    => 173,
                'title' => 'note_create',
            ],
            [
                'id'    => 174,
                'title' => 'note_edit',
            ],
            [
                'id'    => 175,
                'title' => 'note_show',
            ],
            [
                'id'    => 176,
                'title' => 'note_delete',
            ],
            [
                'id'    => 177,
                'title' => 'note_access',
            ],
            [
                'id'    => 178,
                'title' => 'document_create',
            ],
            [
                'id'    => 179,
                'title' => 'document_edit',
            ],
            [
                'id'    => 180,
                'title' => 'document_show',
            ],
            [
                'id'    => 181,
                'title' => 'document_delete',
            ],
            [
                'id'    => 182,
                'title' => 'document_access',
            ],
            [
                'id'    => 183,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 184,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 185,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 186,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 187,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 188,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 189,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 190,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 191,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 192,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 193,
                'title' => 'time_management_access',
            ],
            [
                'id'    => 194,
                'title' => 'time_work_type_create',
            ],
            [
                'id'    => 195,
                'title' => 'time_work_type_edit',
            ],
            [
                'id'    => 196,
                'title' => 'time_work_type_show',
            ],
            [
                'id'    => 197,
                'title' => 'time_work_type_delete',
            ],
            [
                'id'    => 198,
                'title' => 'time_work_type_access',
            ],
            [
                'id'    => 199,
                'title' => 'time_project_create',
            ],
            [
                'id'    => 200,
                'title' => 'time_project_edit',
            ],
            [
                'id'    => 201,
                'title' => 'time_project_show',
            ],
            [
                'id'    => 202,
                'title' => 'time_project_delete',
            ],
            [
                'id'    => 203,
                'title' => 'time_project_access',
            ],
            [
                'id'    => 204,
                'title' => 'time_entry_create',
            ],
            [
                'id'    => 205,
                'title' => 'time_entry_edit',
            ],
            [
                'id'    => 206,
                'title' => 'time_entry_show',
            ],
            [
                'id'    => 207,
                'title' => 'time_entry_delete',
            ],
            [
                'id'    => 208,
                'title' => 'time_entry_access',
            ],
            [
                'id'    => 209,
                'title' => 'time_report_create',
            ],
            [
                'id'    => 210,
                'title' => 'time_report_edit',
            ],
            [
                'id'    => 211,
                'title' => 'time_report_show',
            ],
            [
                'id'    => 212,
                'title' => 'time_report_delete',
            ],
            [
                'id'    => 213,
                'title' => 'time_report_access',
            ],
            [
                'id'    => 214,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}

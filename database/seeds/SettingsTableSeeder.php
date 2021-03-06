<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $setting = $this->findSetting('site.title');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('voyager::seeders.settings.site.title'),
                'value'        => __('voyager::seeders.settings.site.title'),
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
                'group'        => 'Site',
            ])->save();
        }

        $setting = $this->findSetting('site.description');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('voyager::seeders.settings.site.description'),
                'value'        => __('voyager::seeders.settings.site.description'),
                'details'      => '',
                'type'         => 'text_area',
                'order'        => 2,
                'group'        => 'Site',
            ])->save();
        }

        $setting = $this->findSetting('site.logo');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('voyager::seeders.settings.site.logo'),
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 3,
                'group'        => 'Site',
            ])->save();
        }

        $setting = $this->findSetting('site.google_analytics_tracking_id');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('voyager::seeders.settings.site.google_analytics_tracking_id'),
                'value'        => '',
                'details'      => '',
                'type'         => 'text',
                'order'        => 4,
                'group'        => 'Site',
            ])->save();
        }

        $setting = $this->findSetting('admin.bg_image');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('voyager::seeders.settings.admin.background_image'),
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 5,
                'group'        => 'Admin',
            ])->save();
        }

        $setting = $this->findSetting('admin.title');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('voyager::seeders.settings.admin.title'),
                'value'        => 'CmsWeb',
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
                'group'        => 'Admin',
            ])->save();
        }

        $setting = $this->findSetting('admin.description');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('voyager::seeders.settings.admin.description'),
                'value'        => 'Software Inteligente para crear y administrar contenido dinamico en internet.',
                'details'      => '',
                'type'         => 'text_area',
                'order'        => 2,
                'group'        => 'Admin',
            ])->save();
        }

        $setting = $this->findSetting('admin.loader');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('voyager::seeders.settings.admin.loader'),
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 3,
                'group'        => 'Admin',
            ])->save();
        }

        $setting = $this->findSetting('admin.icon_image');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('voyager::seeders.settings.admin.icon_image'),
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 4,
                'group'        => 'Admin',
            ])->save();
        }

        $setting = $this->findSetting('admin.google_analytics_client_id');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('voyager::seeders.settings.admin.google_analytics_client_id'),
                'value'        => '',
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
                'group'        => 'Admin',
            ])->save();
        }


         // Whatsapp ------------------------------------
         $setting = $this->findSetting('whatsapp.phone');
         if (!$setting->exists) {
             $setting->fill([
                 'display_name' => 'Numero de Móvil',
                 'value'        => '0',
                 'details'      => '',
                 'type'         => 'text',
                 'order'        => 1,
                 'group'        => 'Whatsapp',
             ])->save();
         }
         $setting = $this->findSetting('whatsapp.popupMessage');
         if (!$setting->exists) {
             $setting->fill([
                 'display_name' => 'Titulo',
                 'value'        => 'Hola, Necesitas Ayuda?',
                 'details'      => '',
                 'type'         => 'text',
                 'order'        => 2,
                 'group'        => 'Whatsapp',
             ])->save();
         }
         $setting = $this->findSetting('whatsapp.message');
         if (!$setting->exists) {
             $setting->fill([
                 'display_name' => 'Mensaje de Bienvenida',
                 'value'        => 'Quiero mas Info..',
                 'details'      => '',
                 'type'         => 'text_area',
                 'order'        => 3,
                 'group'        => 'Whatsapp',
             ])->save();
         }
         $setting = $this->findSetting('whatsapp.headerTitle');
         if (!$setting->exists) {
             $setting->fill([
                 'display_name' => 'Titulo',
                 'value'        => 'Mi Chat',
                 'details'      => '',
                 'type'         => 'text',
                 'order'        => 4,
                 'group'        => 'Whatsapp',
             ])->save();
         }
         $setting = $this->findSetting('whatsapp.color');
         if (!$setting->exists) {
             $setting->fill([
                 'display_name' => 'Color',
                 'value'        => '#343A40',
                 'details'      => '',
                 'type'         => 'text',
                 'order'        => 5,
                 'group'        => 'Whatsapp',
             ])->save();
         }
         $setting = $this->findSetting('whatsapp.buttonImage');
         if (!$setting->exists) {
             $setting->fill([
                 'display_name' => 'Imagen del boton',
                 'value'        => '',
                 'details'      => '',
                 'type'         => 'image',
                 'order'        => 6,
                 'group'        => 'Whatsapp',
             ])->save();
         }
         $setting = $this->findSetting('whatsapp.position');
         if (!$setting->exists) {
             $setting->fill([
                 'display_name' => 'Posicion del boton',
                 'value'        => '',
                 'details'      => '',
                 'type'         => 'text',
                 'order'        => 7,
                 'group'        => 'Whatsapp',
             ])->save();
         }
         $setting = $this->findSetting('whatsapp.autoOpenTimeout');
         if (!$setting->exists) {
             $setting->fill([
                 'display_name' => 'Timepo de espera para abrir',
                 'value'        => '9000',
                 'details'      => '',
                 'type'         => 'text',
                 'order'        => 8,
                 'group'        => 'Whatsapp',
             ])->save();
         }
         $setting = $this->findSetting('whatsapp.size');
         if (!$setting->exists) {
             $setting->fill([
                 'display_name' => 'Tamanio del boton',
                 'value'        => '72px',
                 'details'      => '',
                 'type'         => 'text',
                 'order'        => 9,
                 'group'        => 'Whatsapp',
             ])->save();
         }
    }

    /**
     * [setting description].
     *
     * @param [type] $key [description]
     *
     * @return [type] [description]
     */
    protected function findSetting($key)
    {
        return Setting::firstOrNew(['key' => $key]);
    }
}

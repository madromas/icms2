<?php

class onContentFrontpageTypes extends cmsAction {

    public function run() {

        $types = [];

        $ctypes = $this->model->getContentTypes();

        if ($ctypes) {
            foreach ($ctypes as $ctype) {

                if (empty($ctype['options']['list_on'])) {
                    continue;
                }

                $types["content:{$ctype['name']}"] = sprintf(LANG_CP_SETTINGS_FP_SHOW_CONTENT, $ctype['title']);
            }
        }

        return [
            'name'  => $this->name,
            'types' => $types
        ];
    }

}

<?php

return [
    'settings' => [
        'height' => 'auto',
        'minHeight' => '200',
        'resizingBar' => false,
        'showPathLabel' => false,
        'imageAccept' => '.jpg, .jpeg, .png, .gif',
        'imageUploadSizeLimit' => 1024 * 1024 * 10,
        'imageWidth' => '100%',
    ],
    'buttonLists' => [
        'default' => [
            [
                'undo',
                'redo',
                'fontSize',
                'formatBlock',
            ],
            [
                'fontColor',
                'hiliteColor',
                'bold',
                'underline',
                'italic',
                'strike',
                'list',
                'align',
                'outdent',
                'indent',
                'removeFormat',
            ],
            [
                'picmo',
                'table',
                'link',
                'image',
                'video',
                'horizontalRule',
            ],
            [
                'showBlocks',
                'codeView',
                'preview',
            ],
        ],
    ],
];

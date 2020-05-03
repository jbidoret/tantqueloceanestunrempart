<?php

return [
    'debug'=> true,
    // markdown
    'community.markdown-field.buttons'    => ['headlines', 'bold', 'italic', 'divider', 'link','pagelink', 'email', 'file', 'divider', 'ul', 'ol', 'blockquote'],
    'community.markdown-field.font'       => [
      'family'  => 'serif',
      'scaling' => true,
      'size'    => 'regular',
    ],
    'community.markdown-field.query'      => [
      'pagelink' => null,
      'images'   => 'page.images',
      'files'    => 'page.files.filterBy("type", "!=", "image")',
    ],
    'community.markdown-field.modals'     => true,
    'community.markdown-field.blank'      => false,
    'community.markdown-field.invisibles' => false,
    
];
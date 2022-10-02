<?php
add_action('init', function () {
    register_post_type('item', [
        'label' => '商品',
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,  //新エディタ Gutenberg を有効化（REST API を有効化）
        'supports' => array(  //記事編集画面に表示する項目を配列で指定することができる
            'title',  //タイトル
            'editor',  //本文の編集機能
            'thumbnail',  //アイキャッチ画像（add_theme_support('post-thumbnails')が必要）
            'excerpt',  //抜粋
            'custom-fields', //カスタムフィールド
            'revisions'  //リビジョンを保存
        ),
    ]);
});

function echo_category_name()
{
    $category = get_the_category();
    echo $category[0]->name;
}

function echo_category_link()
{
    $category = get_the_category();
    echo get_category_link($category[0]->term_id);
}
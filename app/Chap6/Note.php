<?php
namespace App\Chap6;

class Note
{
    public function __construct(string $name)
    {
        print("<p>".$name."のNoteクラスのコンストラクタが実行されました。</p>");
    }
}
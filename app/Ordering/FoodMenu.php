<?php

namespace App\Ordering;

use Illuminate\Support\Collection;
use Revolution\Ordering\Contracts\Menu\MenuData;

class FoodMenu implements MenuData
{
    /**
     * @return Collection
     */
    public function __invoke(): Collection
    {
        $id = 0;

        return collect([
            [
                'id' => ++$id,
                'name' => '野菜ラップ',
                'price' => 699,
                'category' => 'ラップ',
            ],
            [
                'id' => ++$id,
                'name' => 'チキンラップ',
                'text' => 'Chicken Wraps',
                'price' => 799,
                'category' => 'ラップ',
                'image' => $this->image('food_menu2.png'),
                'sold_out_until' => now()->subHour()->toDateTimeString(),
            ],
            [
                'id' => ++$id,
                'name' => '牛肉ラップ',
                'text' => 'Beef Wraps',
                'price' => 899,
                'category' => 'ラップ',
                'image' => $this->image('food_menu3.png'),
                'sold_out_until' => now()->addHour()->toDateTimeString(),
            ],
            [
                'id' => ++$id,
                'name' => 'トン汁',
                'text' => '',
                'price' => 399,
                'category' => 'スープ',
                'image' => $this->image('food_gyudon.png'),
            ],
            [
                'id' => ++$id,
                'name' => '鳥スープ',
                'price' => 499,
                'category' => 'スープ',
                'image' => $this->image('soba_kake.png'),
            ],
            [
                'id' => ++$id,
                'name' => 'モーニングセット',
                'text' => '★モーニング限定',
                'price' => 300,
                'category' => '個別メニュー',
                'image' => $this->image('cafe_morning_coffee_set.png'),
            ],
            [
                'id' => ++$id,
                'name' => '肉ラップ',
                'price' => 400,
                'category' => '個別メニュー',
                'image' => $this->image('promo-4.png'),
            ],
            [
                'id' => ++$id,
                'name' => 'ラザニア（ランチ限定）',
                'price' => 500,
                'category' => '個別メニュー',
                'image' => $this->image('food_lasagna_razania.png'),
            ],
            [
                'id' => ++$id,
                'name' => '店員へのメッセージ',
                'text' => '追加メモに用件を書いて店員呼び出しの代わりにご利用ください（0円で後払いを選択）',
                'price' => 0,
                'category' => '店員呼出',
            ],
            [
                'id' => ++$id,
                'name' => '注文のキャンセル',
                'text' => '注文直後のキャンセルは近くの店員に声をかけるか、こちらからメモを書いてお伝えください。',
                'price' => 0,
                'category' => '店員呼出',
            ],
        ]);
    }

    /**
     * @param  string  $image
     * @return string
     */
    protected function image(string $image): string
    {
        return asset('images/'.$image);
    }
}

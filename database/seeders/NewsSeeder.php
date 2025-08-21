<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        // 1) Реальная новость (из твоего примера)
        $title = 'А у нас в баре новичок';
        News::updateOrCreate(
            ['slug' => Str::slug($title)],
            [
                'title'        => $title,
                'teaser'       => 'Приехал чудесный Шен из Вави. И это чудо, а не чай.',
                'image'        => 'news/shen-vavi.jpg', // положи файл в storage/app/public/news/
                'body'         => <<<HTML
<p>А у нас в баре новичок. Приехал чудесный Шен из Вави. И это чудо, а не чай. В прогретых листьях <a href="#">подробнее</a> продолжение: яркий мёд с запечёнными ягодами и тонкой нотой жасмина. А ещё сладкие ночные цветы: ипомея и примула.</p>
<p>Мёд везде — в аромате, в настое, в сладком послевкусии. Невероятно вкусный чай с тёплым, обволакивающим током ясной, спокойной энергии. Приезжайте – заварим!</p>
HTML,
                'is_active'    => true,
                'published_at' => now(),
            ]
        );

        // 2) Опционально — сгенерировать ещё 5 штук
         News::factory()->count(5)->create();
    }
}

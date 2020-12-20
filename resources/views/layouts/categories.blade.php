
<?php
    use App\Models\CategoriesData;

    $data = new CategoriesData();
    $categories = $data->get();
?>

<div class="card">
    <div class="card-header">Choose your desire major</div>
    <ul class="list-group list-group-flush">
        @for ($i = 0; $i < count($categories); $i++)
            <?php
                $item = $categories[$i];
                $class = $item['class'];
                if($item['id'] === $categoryid) {
                    $class = $class." bg-primary text-white";
                }
            ?>
            <a href="/recentshare/{{ $item['id'] }}">
                <li key={{$item['id']}} class="<?php echo $class; ?>"> 
                    {{$item['name']}}
                </li>
            </a>
        @endfor
    </ul>
</div>


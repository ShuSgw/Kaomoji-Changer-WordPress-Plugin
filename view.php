<?php

echo <<< EOF
        <style>
            .currentKao{
                font-size: 3em;
            }
        </style>
        <script>
            function changeValue() {
                var selectedKaomoji = document.getElementById("selectedKaomoji").value;
                document.getElementById("result").value = selectedKaomoji;
            }
        </script>
        <div>
        <h1>Kaomoji Changer</h1>
        <p>You can change ends of your all senteces into Japanese Kaomoji.</p>
            <form action="" method="post">
                <select id="selectedKaomoji" onchange="changeValue()">
                    <option disabled selected value>- Select Kaomoji -</option>
                    <option value="＼( ^ｏ^ )／">＼( ^ｏ^ )／</option>
                    <option value="v(￣∇￣)v">v(￣∇￣)v</option>
                    <option value="（T_T) ">（T_T) </option>
                    <option value="（￣ー￣）">（￣ー￣）</option>
                    <option value="( ´_ゝ｀)ﾉ">( ´_ゝ｀)ﾉ</option>
                    <option value="(/_・)">(/_・)</option>
                    <option value="（●>∀<●）">（●>∀<●）</option>
                    <option value="（・＿・)">（・＿・)</option>
                    <option value="(´；ω；`)">(´；ω；`)</option>
                    <option value="(。・∀・)ノ">(。・∀・)ノ</option>
                    <option value="。゜(゜´Д｀゜)゜。">。゜(゜´Д｀゜)゜。</option>
                    <option value="(☝︎ ՞ਊ ՞)☝︎">(☝︎ ՞ਊ ՞)☝︎</option>
                    <option value="( ◠‿◠ )">( ◠‿◠ )</option>
                    <option value="( ´Д`)y━･~~">( ´Д`)y━･~~</option>
                    <option value="･:*+.\(( °ω° ))/.:+">･:*+.\(( °ω° ))/.:+</option>
                    <option value="(*´∇｀*)">(*´∇｀*)</option>
                    <option value=".">Reset</option>
                </select>
            <p>Custmize your Kaomoji: <input id="result" type="text" name="kaomoji" value=$kaomoji></p>
            <p>
                <input type="submit" value="Submit Kaomoji">
            </p>
            </form>
        </div>
EOF;
echo '<p>Currently selected Kaomoji👇</p>';
if (get_option('kj_value') == '.' || get_option('kj_value') == '') {
    echo '<p>No Kaomoji</p>';
} else {
    echo '<p class="currentKao">'.get_option('kj_value').'&ensp;&ensp;&ensp;&lt; Hello World</p>';
}

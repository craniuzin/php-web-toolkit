{{#genres}}
<div class="block genre" id="genre-{{slug}}">
    <div class="name">{{name}}</div>
    <ul>
    {{#songs}}
        <li>
            <span class="play-button"></span>
            <span class="artist-title"><strong>{{artist}}</strong> - {{title}}</span>
            <div class="right">
                <span class="time">4:00</span>
                <span class="add"></span>
                <span class="share"></span>
            </div>
        </li>
    {{/songs}}
    </ul>
</div>
{{/genres}}

<footer>
    <div class="row dark">
        <div class="container">
            <div class="col-lg-6">
                <h4>Github Activity</h4>
                <ul class="activity">
                    <?php foreach($activities as $activity): ?>
                        <li>
                            <img src="{{ $activity['actor_avatar'] }}" alt="" width="40" class="pull-left actorAvatar"/>
                            <span class="timeAgo">About {{ $activity['time'] }}</span>
                            <a href="http://github.com/{{ $activity['actor'] }}" target="_blank">{{ $activity['actor'] }}</a>
                            {{ $activity['verb'] }}
                            <a href="{{ $activity['target'] }}" target="_blank">{{ $activity['action_object'] }}</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-lg-6">
                <h4>Twitter feed</h4>
                <ul class="activity">
                    <?php foreach($twitterPosts as $post): ?>
                        <li>
                            <span class="timeAgo">{{ $post['time'] }}</span>
                            {!! $post['tweet'] !!}
                            <a href="{{ $post['url'] }}" target="_blank">View tweet</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 bottom-footer">
                <ul class="list-unstyled bottom-list">
                    <li class="pull-right"><a href="#top">Back to top</a></li>
                    <li class="pull-right"><a href="https://github.com/nWidart/portfolio" target="_blank">Source code on Github</a></li>
                    <li>&copy; {{ date('Y') }} Nicolas Widart</li>
                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ URL::to('/') }}">Home</a></li>
                    <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ URL::route('about') }}">About</a></li>
                    <li class="{{ Request::is('blog*') ? 'active' : '' }}"><a href="{{ URL::route('blog.index') }}">Blog</a></li>
                    <li class="{{ Request::is('projects') ? 'active' : '' }}"><a href="{{ URL::route('projects') }}">Projects</a></li>
                    <li class="{{ Request::is('book-library') ? 'active' : ''}}"><a href="{{ URL::route('library') }}">Book Library</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
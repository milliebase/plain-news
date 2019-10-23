<?php

declare(strict_types=1);

// This is the file where you can keep your data arrays such as articles and
// authors.

$authors = [
    [
        'id' => 1,
        'name' => 'Jon Snow',
    ],
    [
        'id' => 2,
        'name' => 'Sansa Stark',
    ],
    [
        'id' => 3,
        'name' => 'Arya Stark',
    ],
    [
        'id' => 4,
        'name' => 'Brianne of Tarth',
    ],
    [
        'id' => 5,
        'name' => 'Tyrion Lannister',
    ],
];

$articles = [
    [
        'title' => 'I do really know nothing',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec lorem a nisl ultricies sollicitudin eu quis ligula. Quisque libero tellus, aliquet at lacinia at, volutpat et purus. Cras cursus augue et lorem sollicitudin cursus. Vestibulum non nibh faucibus metus vulputate tincidunt non id felis. Fusce finibus cursus nibh et pharetra. Fusce lectus nisi, malesuada eu libero quis, pellentesque scelerisque tortor. Sed elementum cursus arcu, eget venenatis felis iaculis nec. Pellentesque elit quam, auctor ut metus at, lobortis dictum augue. Nam consequat nibh nec rutrum finibus.<br>
                        Etiam aliquam erat a ipsum lobortis luctus. Nam ac hendrerit quam, eget venenatis sem. Curabitur at mauris pellentesque, bibendum justo vel, pellentesque augue. Donec cursus eget nulla vel pellentesque. Donec blandit sapien arcu, a auctor nibh volutpat mattis. Sed eget volutpat leo, finibus condimentum eros. Morbi finibus eros nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse euismod nulla eu purus vestibulum tincidunt. Donec semper lobortis malesuada. Ut convallis metus eros, et fermentum felis rhoncus vel. Fusce a viverra nisi. Praesent mollis egestas tortor, a tincidunt sapien.<br>
                        Mauris eleifend sem sed nunc congue feugiat. Vivamus vitae augue eget odio dapibus laoreet sit amet a arcu. Aenean et consequat sem. Aliquam hendrerit facilisis purus id posuere. Ut at nisi mi. Cras arcu nisl, imperdiet ut felis id, tristique luctus libero. Nam mattis semper luctus. Quisque molestie lacinia tortor malesuada dictum. Vestibulum suscipit augue neque, eget tempus tortor sodales ut. Donec scelerisque massa id volutpat posuere. Sed vestibulum lacus non fringilla mattis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
        'author_id' => 1,
        'published' => '2019-10-23',
        'likes' => 2345,
    ],
    [
        'title' => 'Where\'s my wine?',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec lorem a nisl ultricies sollicitudin eu quis ligula. Quisque libero tellus, aliquet at lacinia at, volutpat et purus. Cras cursus augue et lorem sollicitudin cursus. Vestibulum non nibh faucibus metus vulputate tincidunt non id felis. Fusce finibus cursus nibh et pharetra. Fusce lectus nisi, malesuada eu libero quis, pellentesque scelerisque tortor. Sed elementum cursus arcu, eget venenatis felis iaculis nec. Pellentesque elit quam, auctor ut metus at, lobortis dictum augue. Nam consequat nibh nec rutrum finibus.<br>
                        Etiam aliquam erat a ipsum lobortis luctus. Nam ac hendrerit quam, eget venenatis sem. Curabitur at mauris pellentesque, bibendum justo vel, pellentesque augue. Donec cursus eget nulla vel pellentesque. Donec blandit sapien arcu, a auctor nibh volutpat mattis. Sed eget volutpat leo, finibus condimentum eros. Morbi finibus eros nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse euismod nulla eu purus vestibulum tincidunt. Donec semper lobortis malesuada. Ut convallis metus eros, et fermentum felis rhoncus vel. Fusce a viverra nisi. Praesent mollis egestas tortor, a tincidunt sapien.<br>
                        Mauris eleifend sem sed nunc congue feugiat. Vivamus vitae augue eget odio dapibus laoreet sit amet a arcu. Aenean et consequat sem. Aliquam hendrerit facilisis purus id posuere. Ut at nisi mi. Cras arcu nisl, imperdiet ut felis id, tristique luctus libero. Nam mattis semper luctus. Quisque molestie lacinia tortor malesuada dictum. Vestibulum suscipit augue neque, eget tempus tortor sodales ut. Donec scelerisque massa id volutpat posuere. Sed vestibulum lacus non fringilla mattis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
        'author_id' => 5,
        'published' => '2019-09-04',
        'likes' => 148796,
    ],
    [
        'title' => 'The life of a winner',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec lorem a nisl ultricies sollicitudin eu quis ligula. Quisque libero tellus, aliquet at lacinia at, volutpat et purus. Cras cursus augue et lorem sollicitudin cursus. Vestibulum non nibh faucibus metus vulputate tincidunt non id felis. Fusce finibus cursus nibh et pharetra. Fusce lectus nisi, malesuada eu libero quis, pellentesque scelerisque tortor. Sed elementum cursus arcu, eget venenatis felis iaculis nec. Pellentesque elit quam, auctor ut metus at, lobortis dictum augue. Nam consequat nibh nec rutrum finibus.<br>
                        Etiam aliquam erat a ipsum lobortis luctus. Nam ac hendrerit quam, eget venenatis sem. Curabitur at mauris pellentesque, bibendum justo vel, pellentesque augue. Donec cursus eget nulla vel pellentesque. Donec blandit sapien arcu, a auctor nibh volutpat mattis. Sed eget volutpat leo, finibus condimentum eros. Morbi finibus eros nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse euismod nulla eu purus vestibulum tincidunt. Donec semper lobortis malesuada. Ut convallis metus eros, et fermentum felis rhoncus vel. Fusce a viverra nisi. Praesent mollis egestas tortor, a tincidunt sapien.<br>
                        Mauris eleifend sem sed nunc congue feugiat. Vivamus vitae augue eget odio dapibus laoreet sit amet a arcu. Aenean et consequat sem. Aliquam hendrerit facilisis purus id posuere. Ut at nisi mi. Cras arcu nisl, imperdiet ut felis id, tristique luctus libero. Nam mattis semper luctus. Quisque molestie lacinia tortor malesuada dictum. Vestibulum suscipit augue neque, eget tempus tortor sodales ut. Donec scelerisque massa id volutpat posuere. Sed vestibulum lacus non fringilla mattis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
        'author_id' => 4,
        'published' => '2019-10-23',
        'likes' => 46357,
    ],
    [
        'title' => 'Valar morghulis and how D&D took my storyline down the garbage',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec lorem a nisl ultricies sollicitudin eu quis ligula. Quisque libero tellus, aliquet at lacinia at, volutpat et purus. Cras cursus augue et lorem sollicitudin cursus. Vestibulum non nibh faucibus metus vulputate tincidunt non id felis. Fusce finibus cursus nibh et pharetra. Fusce lectus nisi, malesuada eu libero quis, pellentesque scelerisque tortor. Sed elementum cursus arcu, eget venenatis felis iaculis nec. Pellentesque elit quam, auctor ut metus at, lobortis dictum augue. Nam consequat nibh nec rutrum finibus.<br>
                        Etiam aliquam erat a ipsum lobortis luctus. Nam ac hendrerit quam, eget venenatis sem. Curabitur at mauris pellentesque, bibendum justo vel, pellentesque augue. Donec cursus eget nulla vel pellentesque. Donec blandit sapien arcu, a auctor nibh volutpat mattis. Sed eget volutpat leo, finibus condimentum eros. Morbi finibus eros nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse euismod nulla eu purus vestibulum tincidunt. Donec semper lobortis malesuada. Ut convallis metus eros, et fermentum felis rhoncus vel. Fusce a viverra nisi. Praesent mollis egestas tortor, a tincidunt sapien.<br>
                        Mauris eleifend sem sed nunc congue feugiat. Vivamus vitae augue eget odio dapibus laoreet sit amet a arcu. Aenean et consequat sem. Aliquam hendrerit facilisis purus id posuere. Ut at nisi mi. Cras arcu nisl, imperdiet ut felis id, tristique luctus libero. Nam mattis semper luctus. Quisque molestie lacinia tortor malesuada dictum. Vestibulum suscipit augue neque, eget tempus tortor sodales ut. Donec scelerisque massa id volutpat posuere. Sed vestibulum lacus non fringilla mattis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
        'author_id' => 3,
        'published' => '2018-11-03',
        'likes' => 87044,
    ],
    [
        'title' => 'Jon?',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec lorem a nisl ultricies sollicitudin eu quis ligula. Quisque libero tellus, aliquet at lacinia at, volutpat et purus. Cras cursus augue et lorem sollicitudin cursus. Vestibulum non nibh faucibus metus vulputate tincidunt non id felis. Fusce finibus cursus nibh et pharetra. Fusce lectus nisi, malesuada eu libero quis, pellentesque scelerisque tortor. Sed elementum cursus arcu, eget venenatis felis iaculis nec. Pellentesque elit quam, auctor ut metus at, lobortis dictum augue. Nam consequat nibh nec rutrum finibus.<br>
                        Etiam aliquam erat a ipsum lobortis luctus. Nam ac hendrerit quam, eget venenatis sem. Curabitur at mauris pellentesque, bibendum justo vel, pellentesque augue. Donec cursus eget nulla vel pellentesque. Donec blandit sapien arcu, a auctor nibh volutpat mattis. Sed eget volutpat leo, finibus condimentum eros. Morbi finibus eros nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse euismod nulla eu purus vestibulum tincidunt. Donec semper lobortis malesuada. Ut convallis metus eros, et fermentum felis rhoncus vel. Fusce a viverra nisi. Praesent mollis egestas tortor, a tincidunt sapien.<br>
                        Mauris eleifend sem sed nunc congue feugiat. Vivamus vitae augue eget odio dapibus laoreet sit amet a arcu. Aenean et consequat sem. Aliquam hendrerit facilisis purus id posuere. Ut at nisi mi. Cras arcu nisl, imperdiet ut felis id, tristique luctus libero. Nam mattis semper luctus. Quisque molestie lacinia tortor malesuada dictum. Vestibulum suscipit augue neque, eget tempus tortor sodales ut. Donec scelerisque massa id volutpat posuere. Sed vestibulum lacus non fringilla mattis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
        'author_id' => 2,
        'published' => '2019-08-14',
        'likes' => 487,
    ],
];

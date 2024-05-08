<?php
// Функція для отримання списку статей
function getArticles(): array {
    return [
        [
            'id' => 1, 
            'title' => 'Article #1',
            'category' => 'Cats',
            'content' => 'Six started far placing saw respect females old. Civilly why how end viewing attempt related enquire visitor. Man particular insensible celebrated conviction stimulated principles day. Sure fail or in said west. Right my front it wound cause fully am sorry if. She jointure goodness interest debating did outweigh. Is time from them full my gone in went. Of no introduced am literature excellence mr stimulated contrasted increasing. Age sold some full like rich new. Amounted repeated as believed in confined juvenile.',
            'author' => 'Alex',
            'created' => '2002-05-26',
            'image' => '20240202225732_1.jpg'
        ],
        [
            'id' => 2, 
            'title' => 'Article #2',
            'category' => 'Dogs',
            'content' => 'As absolute is by amounted repeated entirely ye returned. These ready timed enjoy might sir yet one since. Years drift never if could forty being no. On estimable dependent as suffering on my. Rank it long have sure in room what as he. Possession travelling sufficient yet our. Talked vanity looked in to. Gay perceive led believed endeavor. Rapturous no of estimable oh therefore direction up. Sons the ever not fine like eyes all sure..',
            'author' => 'John',
            'created' => '2002-05-26',
            'image' => '20240202225732_1.jpg'
        ],
        [
            'id' => 3, 
            'title' => 'Article #3',
            'category' => 'Frogs',
            'content' => 'On then sake home is am leaf. Of suspicion do departure at extremely he believing. Do know said mind do rent they oh hope of. General enquire picture letters garrets on offices of no on. Say one hearing between excited evening all inhabit thought you. Style begin mr heard by in music tried do. To unreserved projection no introduced invitation.',
            'author' => 'Jay',
            'created' => '2002-05-26',
            'image' => '20240202225732_1.jpg'
        ],
    ];
}

// Функція для отримання списку статей
function getArticleData(int $articleId):? array {
    $articles = getArticles();
    foreach ($articles as $article) {
        if ($article['id'] === $articleId) {
            return $article;
        }
    }
    return null;
}

---
id: f3t2hklv
title: ArticlesController
file_version: 1.1.3
app_version: 1.15.3
---

This is the `/articles` endpoint. It is a GET Request and will return you a list of the latest articles. It returns a JSON List

This still needs to be updated to show published Articles
<!-- NOTE-swimm-snippet: the lines below link your snippet to Swimm -->
### 📄 src/Controller/ArticlesController.php
```hack
11         #[Route(name: 'articles', path: '/articles', methods: ['GET'])]
```

<br/>

The function `listLatestArticles`<swm-token data-swm-token=":src/Controller/ArticlesController.php:12:5:5:`    public function listLatestArticles(): Response`"/> shows all articles. It uses the `Response`<swm-token data-swm-token=":src/Controller/ArticlesController.php:12:10:10:`    public function listLatestArticles(): Response`"/> class as return type.
<!-- NOTE-swimm-snippet: the lines below link your snippet to Swimm -->
### 📄 src/Controller/ArticlesController.php
```hack
12         public function listLatestArticles(): Response
13         {
14             return new Response('This controller shows latest articles');
15         }
```

<br/>

This file was generated by Swimm. [Click here to view it in the app](https://app.swimm.io/repos/Z2l0aHViJTNBJTNBc3ltZm9ueS1kb2NrZXIlM0ElM0FIdXNzYW05Mg==/docs/f3t2hklv).

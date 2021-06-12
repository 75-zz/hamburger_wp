<?php get_header(); ?>
                <div class="l-hero-single p-page-hero">
                <?php echo "<h1 class='p-page__title'>". get_the_title() . "</h1>"; ?>

                </div>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="p-single-wrapper">

<?php the_content(); ?>

<?php /* ?>
                    <section class="c-single-text">
                        <h2>見出しh2</h2>
                        <p>Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                        </p>
                        <h3>見出しh3</h3>
                        <h4>見出しh4</h4>
                        <h3>見出しh3</h3>
                        <h4>見出しh4</h4>
                        <h5>見出しh5</h5>
                        <h6>見出しh6</h6>
                    </section>
                    <section class="c-blockquote">
                        <p>Blockquote
                            引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                        </p>
                        <p>出典先：　<a href=" #=">◯◯◯◯◯◯◯◯◯◯</a></p>
                    </section>
                    <section class="c-bigImg"><img src="img/single-big-img.png" alt="ハンバーガーとポテトの大きな画像"></section>
                    <section class="c-figure">
                        <figure><img src="img/single-fig-img.png" alt="ハンバーガーとポテトの小さな画像">
                            <figcaption> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</figcaption>
                        </figure>
                        <figure>
                            <figcaption> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</figcaption><img
                                src="img/single-fig-img.png" alt="ハンバーガーとポテトの小さな画像">
                        </figure>
                    </section>
                    <section class="c-nomalImg"><img src="img/single-fig-img.png" alt="ハンバーガーとポテトの小さな画像"></section>
                    <section class="c-gridImg">
                        <div class="c-item"><img src="img/single-grid-img.png" alt="ハンバーガーとポテトのとても小さな画像"></div>
                        <div class="c-item"><img src="img/single-grid-img.png" alt="ハンバーガーとポテトのとても小さな画像"></div>
                        <div class="c-item"><img src="img/single-grid-img.png" alt="ハンバーガーとポテトのとても小さな画像"></div>
                        <div class="c-item"><img src="img/single-grid-img.png" alt="ハンバーガーとポテトのとても小さな画像"></div>
                        <div class="c-item"><img src="img/single-grid-img.png" alt="ハンバーガーとポテトのとても小さな画像"></div>
                        <div class="c-item"><img src="img/single-grid-img.png" alt="ハンバーガーとポテトのとても小さな画像"></div>
                        <div class="c-item"><img src="img/single-grid-img.png" alt="ハンバーガーとポテトのとても小さな画像"></div>
                        <div class="c-item"><img src="img/single-grid-img.png" alt="ハンバーガーとポテトのとても小さな画像"></div>
                        <div class="c-item"><img src="img/single-grid-img.png" alt="ハンバーガーとポテトのとても小さな画像"></div>
                    </section>
                    <section class="c-list">
                        <ul>
                            <li>1.リストリストリスト</li>
                            <li>2.リストリストリスト
                                <ul>
                                    <li>1.リストリストリスト</li>
                                    <li>2.リストリストリスト</li>
                                </ul>
                            </li>
                            <li>1.リストリストリスト</li>
                            <li>2.リストリストリスト</li>
                        </ul>
                        <ul>
                            <li>リストリストリスト</li>
                            <li>リストリストリスト
                                <ul>
                                    <li>リスト2リスト2リスト2</li>
                                    <li>リスト2リスト2リスト2</li>
                                </ul>
                            </li>
                            <li>リストリストリスト</li>
                            <li>リストリストリスト</li>
                        </ul>
                    </section>
                    <section class="c-code">
                        <code>
                            &lt;html&gt;<br>
                            &nbsp;&nbsp;&lt;head&gt;<br>
                            &nbsp;&nbsp;&lt;/head&gt;<br>
                            &nbsp;&nbsp;&lt;body&gt;<br>
                            &nbsp;&nbsp;&lt;/body&gt;<br>
                            &lt;/html&gt;
                        </code>
                        </section>
                    <section class="c-table">
                        <table>
                            <tr>
                                <td>テーブル</td>
                                <td>テーブル</td>
                            </tr>
                            <tr>
                                <td>テーブル</td>
                                <td>テーブル</td>
                            </tr>
                            <tr>
                                <td>テーブル</td>
                                <td>テーブル</td>
                            </tr>
                            <tr>
                                <td>テーブル</td>
                                <td>テーブル</td>
                            </tr>
                        </table>
                    </section>
                    <button class="c-button">ボタン</button>
                    <p class="c-bold">boldboldboldboldboldboldbold</p>
                    <?php */ ?>
                </div>
                <?php endwhile; ?>
<?php endif; ?>

</main>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
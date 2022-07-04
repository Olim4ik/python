Here are some OOP notes.

Если приложение становится большим и над проектом работают сразу несколько человек, 
то требуется использовать другой подход - объектно-ориентированное программирование.
Вся его суть лежит в его названии - объектно-ориентированное. То есть основанное на объектах.
Если говорить более развернуто, то это подход, базирующийся на объектах и на взаимоотношениях между ними.


Что вообще за объекты такие?
Давайте на минутку забудем о программировании и подумаем: что такое объекты. Да это всё, что нас окружает.
Взгляните на комнату вокруг. Вот же: стул, стол, цветок, ручка, листок бумаги - всё это является объектами.
Вы, в том числе, тоже объект. Вы можете взять ручку и начать что-то писать на листе бумаги.
Это - взаимодействие между объектами. А ещё, если присмотреться, то можно понять, 
что все объекты созданы по какому-то определенному шаблону.

Возьмем к примеру те же шариковые ручки: одна - желтая, другая - синяя. Да, цвет у них разный, но если вы посмотрите на них,
то безошибочно их классифицируете как ручки. И вы понимаете, что для того, чтобы сделать ручку, нужен какой-то чертёж, 
по которому её будут собирать. И то же самое со столом, стулом, и даже Вами - ваша ДНК содержит "шаблон", 
по которому вы в итоге собрались.

Ровно то же самое происходит и в объектно-ориентированном программировании. Виртуальные объекты создаются на основе 
специальных шаблонов, называемых классами. Класс - это своего рода "чертёж", на основе которого будут созданы объекты. 
Объект же, как из этого следует - это экземпляр какого-то класса. То есть сущность, созданная по этому шаблону.



Итак, представим, что мы хотим создать некоторую упрощенную модель котика в PHP. Для этого нам сперва надо сделать его "чертёж",
а именно - создать класс. Мы смотрим на котиков и понимаем что это котики. Это происходит по тому, 
что все котики имеют какие-то общие признаки. По этим признакам мы можем отличать одни классы объектов от других.

Итак, мы сделали некоторый шаблон, который описывает котиков. Пора бы уже и котика по нему собрать. А именно - создать объект.


1) Инкапсуляция
Инкапсуляция (лат. in capsula; от capsula «коробочка») — размещение в оболочке, изоляция, закрытие чего-либо с целью исключения влияния на окружающее. 
Можно сказать что инкапсуляция - это возможность объектов содержать в себе свойства и методы. Так мы делаем их зависимыми друг от друга внутри этой "капсулы".


2) Наследование
Котики бывают двух полов: мальчики и девочки. Все мы прекрасно понимаем, чем они отличаются. 
Однако, у них есть и общие черты – независимо от пола и у тех и у тех есть четыре лапы, есть хвост, голова, усы и далее по списку.
 То есть есть что-то общее, а есть что-то, что их отличает. Так сказать, детали реализации.

В природе таких примеров уйма – это деление существ по классам и царствам, разделение по половому признаку,разделение по расовой принадлежности,
и так далее. Любую вещь можно отнести к какому-то классу, а по каким-то другим признакам – отличить её от других вещей.

Так вот в программировании очень часто встречаются аналогичные ситуации, когда какой-то сущности (или нескольким сущностям) нужно повторить то же,
что есть у другой сущности, но с какими-то дополнительными возможностями.

<?php

class Post
{
    private $title;
    private $text;

    public function __construct(string $title, string $text)
    {
        $this->title = $title;
        $this->text = $text;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text): void
    {
        $this->text = $text;
    }
}

class Lesson extends Post
{
    private $homework;

    public function __construct(string $title, string $text, string $homework)
    {
        parent::__construct($title, $text);
        $this->homework = $homework;
    }

    public function getHomework(): string
    {
        return $this->homework;
    }

    public function setHomework(string $homework): void
    {
        $this->homework = $homework;
    }
}

$lesson = new Lesson('Заголовок', 'Текст', 'Домашка');
var_dump($lesson);

?>
<?php

/** @var $page \Magento\Cms\Model\Page */

$objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();

$defaultStore = $objectManager->create(\Magento\Store\Model\Store::class)->load('default');
$fixtureStore = $objectManager->create(\Magento\Store\Model\Store::class)->load('fixturestore');

$page = $objectManager->create(\Magento\Cms\Model\Page::class);
$page->setTitle('Cms Test Tag Page111')
    ->setIdentifier('page_test_tag111')
    ->setStores([$defaultStore->getId()])
    ->setIsActive(1)
    ->setContent('<h1>Cms Page Design Blank Title1</h1>')
    ->setPageLayout('1column')
    ->setCmsPageTags('test tag,second')
    ->setCmsImageTeaser('image1.png')
    ->save();

$page = $objectManager->create(\Magento\Cms\Model\Page::class);
$page->setTitle('Cms Test Tag Page222')
    ->setIdentifier('page_test_tag222')
    ->setStores([0])
    ->setIsActive(1)
    ->setContent('<h1>Cms Page Design Blank Title2</h1>')
    ->setPageLayout('1column')
    ->setCmsPageTags('test tag,double tag')
    ->setCmsImageTeaser('image2.png')
    ->save();

$page = $objectManager->create(\Magento\Cms\Model\Page::class);
$page->setTitle('Cms Test Tag Page333')
    ->setIdentifier('page_test_tag333')
    ->setStores([0])
    ->setIsActive(1)
    ->setContent('<h1>Cms Page Design Blank Title3</h1>')
    ->setPageLayout('1column')
    ->setCmsPageTags('second,third,double tag')
    ->setCmsImageTeaser('image3.png')
    ->save();

$page = $objectManager->create(\Magento\Cms\Model\Page::class);
$page->setTitle('Cms Test Tag Page444')
    ->setIdentifier('page_test_tag444')
    ->setStores([$fixtureStore->getId()])
    ->setIsActive(1)
    ->setContent('<h1>Cms Page Design Blank Title4</h1>')
    ->setPageLayout('1column')
    ->setCmsPageTags('double tag')
    ->setCmsImageTeaser('image4.png')
    ->save();

<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'osteklenie_fields');
function osteklenie_fields()
{

    Container::make('theme_options', 'Общие настройки')

        ->set_page_menu_position(2)
        ->set_icon('dashicons-admin-generic')
        ->add_tab(__('Контакты'), array(
            Field::make('complex', 'crb_header_links', 'Кнопки в хедере')
                ->set_max(3)
                ->add_fields(array(
                    Field::make('text', 'crb_hlink_text', 'Текст кнопки')
                        ->set_width(50),
                    Field::make('text', 'crb_hlink_link', 'Ссылка кнопки')
                        ->set_width(50),
                )),
            Field::make('text', 'crb_shedule', 'Режим работы')
                ->set_width(33),
            Field::make('text', 'crb_phone', 'Номер телефона')
                ->set_width(33),
            Field::make('text', 'crb_phone_link', 'Ссылка номера телефона')
                ->set_width(33),

        ))

        ->add_tab(__('Кнопка Call to action'), array(
            Field::make('text', 'crb_cta_button', 'Ссылка CTA кнопки')
                ->set_width(100),

        ));

    Container::make('theme_options', 'Шаблон Остекление')

        ->set_page_menu_position(3)
        ->set_icon('dashicons-admin-generic')

        ->add_tab(__('HERO'), array(
            Field::make('image', 'crb_hero_image', 'Изображение первого экрана')
                ->set_width(33),
            Field::make('text', 'crb_hero_heading', 'Заголовок')
                ->set_width(33),
            Field::make('text', 'crb_hero_description', 'подзаголовок')
                ->set_width(33),
        ))

        ->add_tab(__('Блок услуг'), array(
            Field::make('text', 'crb_services_head', 'Заголовок')
                ->set_width(50),
            Field::make('rich_text', 'crb_services_desc', 'Описание')
                ->set_width(50),
            Field::make('complex', 'crb_services_items', 'Список услуг')
                ->add_fields(array(
                    Field::make('image', 'crb_service_img', 'Изображение услуги')
                        ->set_width(30),
                    Field::make('text', 'crb_service_head', 'Название услуги')
                        ->set_width(30),
                    Field::make('rich_text', 'crb_service_desc', 'Описание')
                        ->set_width(30),
                )),
        ))

        ->add_tab(__('Наши работы'), array(
            Field::make('text', 'crb_works_head', 'Заголовок')
                ->set_width(50),
            Field::make('text', 'crb_works_desc', 'Описание')
                ->set_width(50),
            Field::make('complex', 'crb_works_items', 'Фото работ')
                ->add_fields(array(
                    Field::make('image', 'crb_work_img', 'Изображение услуги')
                        ->set_width(33),
                )),
        ))

        ->add_tab(__('Виды'), array(
            Field::make('text', 'crb_types_head', 'Заголовок')
                ->set_width(50),

            Field::make('complex', 'crb_types_items', 'Фото типов')
                ->add_fields(array(
                    Field::make('image', 'crb_type_img', 'Изображение типа')
                        ->set_width(33),
                    Field::make('text', 'crb_type_head', 'Название')
                        ->set_width(33),
                    Field::make('text', 'crb_type_desc', 'Описание')
                        ->set_width(33),
                )),
        ))


        ->add_tab(__('Как сделать заказ'), array(
            Field::make('complex', 'crb_order_list', 'Этапы заказа')
                ->add_fields(array(
                    Field::make('text', 'crb_order_item_head', 'Заголовок')
                        ->set_width(50),
                    Field::make('text', 'crb_order_item_desc', 'Описание')
                        ->set_width(50),
                ))
        ))

        ->add_tab(__('Срочное изготовление'), array(
            Field::make('complex', 'crb_express_photos', 'Изображения')
                ->set_max(3)
                ->add_fields(array(
                    Field::make('image', 'crb_express_img', 'Изображение')
                        ->set_width(50),
                )),

            Field::make('text', 'crb_express_head', 'Заголовок')
                ->set_width(50),
            Field::make('rich_text', 'crb_express_text', 'Текст')
                ->set_width(50),

        ))


        ->add_tab(__('Каталог'), array(
            Field::make('text', 'crb_production_head', 'Заголовок')
                ->set_width(50),
            Field::make('rich_text', 'crb_production_text', 'Текст')
                ->set_width(50),
            Field::make('complex', 'crb_catalog', 'Каталог')
                ->add_fields(array(
                    Field::make('image', 'crb_catalog_img', 'Изображение')
                        ->set_width(33),
                    Field::make('text', 'crb_catalog_head', 'Заголовок')
                        ->set_width(33),
                    Field::make('text', 'crb_catalog_price', 'Цена')
                        ->set_width(33),
                    Field::make('rich_text', 'crb_catalog_text', 'Характеристики')
                        ->set_width(33),
                    Field::make('text', 'crb_catalog_button', 'Ссылка кнопки')
                        ->set_width(50),
                )),


        ))

        ->add_tab(__('О нас в цифрах'), array(
            Field::make('complex', 'crb_nums_list', 'Цифры')
                ->add_fields(array(
                    Field::make('text', 'crb_num_num', 'Цифра')
                        ->set_width(33),
                    Field::make('text', 'crb_num_word', 'Слово')
                        ->set_width(33),
                    Field::make('rich_text', 'crb_num_desc', 'Описание')
                        ->set_width(33.),
                )),
            Field::make('image', 'crb_nums_bg', 'Изображение')
                ->set_width(33),
        ))

        ->add_tab(__('Рассрочка'), array(
            Field::make('text', 'crb_pays_head', 'Заголовок')
                ->set_width(50),
            Field::make('rich_text', 'crb_pays_text', 'Текст')
                ->set_width(50),
        ))

        ->add_tab(__('Преимущества'), array(
            Field::make('text', 'crb_benefits_head', 'Заголовок')
                ->set_width(50),
            Field::make('rich_text', 'crb_benefits_text', 'Текст')
                ->set_width(50),
            Field::make('complex', 'crb_benefits_list', 'Каталог')
                ->add_fields(array(
                    Field::make('image', 'crb_benefits_img', 'Иконка')
                        ->set_width(50),
                    Field::make('text', 'crb_benefits_head', 'Заголовок')
                        ->set_width(50),
                    Field::make('text', 'crb_benefits_desc', 'Описание')
                        ->set_width(50),
                )),
        ))

        ->add_tab(__('Производство'), array(
            Field::make('complex', 'crb_production_items', 'Изображения')
                ->add_fields(array(
                    Field::make('image', 'crb_production_img', 'Изображение')
                        ->set_width(50),
                    Field::make('text', 'crb_production_head', 'Заголовок')
                        ->set_width(50),
                    Field::make('text', 'crb_production_text', 'Описание')
                        ->set_width(50),
                )),
        ))

        ->add_tab(__('Доставка'), array(
            Field::make('complex', 'crb_delivery_list', 'Доставка')
                ->add_fields(array(
                    Field::make('image', 'crb_delivery_img', 'Изображение')
                        ->set_width(50),
                    Field::make('text', 'crb_delivery_head', 'Заголовок')
                        ->set_width(50),
                )),
        ))


        ->add_tab(__('Специальное предложение'), array(

            Field::make('text', 'crb_offer', 'Заголовок')
                ->set_width(50),

            Field::make('rich_text', 'crb_offer_text', 'Текст')
                ->set_width(50),

            Field::make('image', 'crb_offer_bg', 'Изображение')
                ->set_width(50),
        ))

        ->add_tab(__('FAQ'), array(

            Field::make('text', 'crb_faq_head', 'Заголовок')
                ->set_width(50),
            Field::make('complex', 'crb_faq_list', 'вопросы-ответы')
                ->add_fields(array(
                    Field::make('text', 'crb_faq_question', 'Вопрос')
                        ->set_width(50),
                    Field::make('rich_text', 'crb_faq_answer', 'Ответ')
                        ->set_width(50),
                )),
        ))

        ->add_tab(__('Отзывы'), array(

            Field::make('text', 'crb_feedback_head', 'Заголовок')
                ->set_width(50),
            Field::make('complex', 'crb_feedback_list', 'Отзывы')
                ->add_fields(array(
                    Field::make('image', 'crb_feedback_img', 'Фото')
                        ->set_width(20),
                    Field::make('text', 'crb_feedback_name', 'Имя')
                        ->set_width(20),
                    Field::make('rich_text', 'crb_feedback_text', 'Текст отзыва')
                        ->set_width(60),
                )),
        ));


}

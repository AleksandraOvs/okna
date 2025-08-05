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

    Container::make('theme_options', 'Шаблоны страниц')

        ->set_page_menu_position(3)
        ->set_icon('dashicons-admin-generic')

        ->add_tab(__('Общие блоки'), array(
            //Field::make( 'sidebar', 'crb_custom_sidebar' )
            //->add_fields(array(
            Field::make('complex', 'crb_order_list', 'Этапы заказа')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('text', 'crb_order_item_head', 'Заголовок')
                        ->set_width(50),
                    Field::make('text', 'crb_order_item_desc', 'Описание')
                        ->set_width(50),
                )),
            // ))

            // ->add_fields(__('Срочное изготовление'), array(
            Field::make('text', 'crb_express_head', 'Срочное изготовление')
                ->set_classes('field-heading')
                ->set_width(100),
            Field::make('rich_text', 'crb_express_text', 'Текст')
                ->set_width(50),
            Field::make('image', 'crb_express_img', 'Изображение')
                ->set_width(50),
            // ))

            // ->add_fields(__('О нас в цифрах'), array(
            Field::make('complex', 'crb_nums_list', 'О нас в цифрах')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('text', 'crb_num_num', 'Цифра')
                        ->set_width(33),
                    Field::make('text', 'crb_num_word', 'Слово')
                        ->set_width(33),
                    Field::make('rich_text', 'crb_num_desc', 'Описание')
                        ->set_width(33),
                )),
            Field::make('image', 'crb_nums_bg', 'Фоновое зображение')
                ->set_width(100),
            //  ))

            //  ->add_fields(__('Рассрочка'), array(
            Field::make('text', 'crb_pays_head', 'Рассрочка')
                ->set_classes('field-heading')
                ->set_width(100),
            Field::make('rich_text', 'crb_pays_text', 'Текст')
                ->set_width(50),
            //   ))

            // ->add_fields(__('Преимущества'), array(
            Field::make('text', 'crb_benefits_head', 'Преимущества - заголовок')
                ->set_classes('field-heading')
                ->set_width(100),
            Field::make('rich_text', 'crb_benefits_text', 'Текст')
                ->set_width(50),
            Field::make('complex', 'crb_benefits_list', 'Каталог')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_benefits_img', 'Иконка')
                        ->set_width(50),
                    Field::make('text', 'crb_benefits_head', 'Заголовок')
                        ->set_width(50),
                    Field::make('text', 'crb_benefits_desc', 'Описание')
                        ->set_width(50),
                )),
            //   ))

            //  ->add_fields(__('Производство'), array(
            Field::make('complex', 'crb_production_items', 'Пункты блока Производство')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_production_img', 'Изображение')
                        ->set_width(33),
                    Field::make('text', 'crb_production_head', 'Заголовок')
                        ->set_width(33),
                    Field::make('text', 'crb_production_text', 'Описание')
                        ->set_width(33),
                )),
            //    ))

            //    ->add_fields(__('Доставка'), array(
            Field::make('complex', 'crb_delivery_list', 'Доставка')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_delivery_img', 'Изображение')
                        ->set_width(50),
                    Field::make('text', 'crb_delivery_head', 'Заголовок')
                        ->set_width(50),
                )),
            //    ))

            //    ->add_fields(__('FAQ'), array(

            Field::make('text', 'crb_faq_head', 'FAQ - Заголовок')
                ->set_classes('field-heading')
                ->set_width(100),
            Field::make('complex', 'crb_faq_list', 'Вопросы-ответы')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('text', 'crb_faq_question', 'Вопрос')
                        ->set_width(50),
                    Field::make('rich_text', 'crb_faq_answer', 'Ответ')
                        ->set_width(50),
                )),
        ))

        // ))

        ->add_tab(__('Шаблон Остекление балкона'), array(
            Field::make('image', 'crb_hero_image', 'Изображение первого экрана')
                ->set_width(33),
            Field::make('text', 'crb_hero_heading', 'Заголовок')
                ->set_width(33),
            Field::make('text', 'crb_hero_description', 'подзаголовок')
                ->set_width(33),

            Field::make('text', 'crb_services_head', 'Услуги - Заголовок')
                ->set_classes('field-heading')
                ->set_width(50),
            Field::make('rich_text', 'crb_services_desc', 'Описание')
                ->set_width(50),
            Field::make('complex', 'crb_services_items', 'Список услуг')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_service_img', 'Изображение услуги')
                        ->set_width(33),
                    Field::make('text', 'crb_service_head', 'Название услуги')
                        ->set_width(33),
                    Field::make('rich_text', 'crb_service_desc', 'Описание')
                        ->set_width(33),
                )),

            Field::make('text', 'crb_works_head', 'Наши работы - Заголовок')
                ->set_classes('field-heading')
                ->set_width(100),
            Field::make('text', 'crb_works_desc', 'Описание')
                ->set_width(50),
            Field::make('complex', 'crb_works_items', 'Фото работ')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_work_img', 'Изображение услуги')
                        ->set_width(33),
                )),


            Field::make('text', 'crb_types_head', 'Виды продукции')
                ->set_classes('field-heading')
                ->set_width(100),

            Field::make('complex', 'crb_types_items', 'Фото типов')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_type_img', 'Изображение типа')
                        ->set_width(33),
                    Field::make('text', 'crb_type_head', 'Название')
                        ->set_width(33),
                    Field::make('text', 'crb_type_desc', 'Описание')
                        ->set_width(33),
                )),

            Field::make('text', 'crb_production_head', 'Производство - Заголовок')
                ->set_classes('field-heading')
                ->set_width(100),
            Field::make('rich_text', 'crb_production_text', 'Текст')
                ->set_width(50),


            Field::make('complex', 'crb_catalog', 'Каталог')
                ->set_collapsed('true')
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

            Field::make('text', 'crb_offer', 'Специальное предложение - Заголовок')
                ->set_classes('field-heading')
                ->set_width(100),

            Field::make('rich_text', 'crb_offer_text', 'Текст')
                ->set_width(50),

            Field::make('image', 'crb_offer_bg', 'Изображение')
                ->set_width(50),

            Field::make('text', 'crb_feedback_head', 'Отзывы - Заголовок')
                ->set_classes('field-heading')
                ->set_width(100),
            Field::make('complex', 'crb_feedback_list', 'Отзывы')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_feedback_img', 'Фото')
                        ->set_width(20),
                    Field::make('text', 'crb_feedback_name', 'Имя')
                        ->set_width(20),
                    Field::make('rich_text', 'crb_feedback_text', 'Текст отзыва')
                        ->set_width(60),
                )),

        ))


        ->add_tab(__('Шаблон Загородные дома'), array(
            Field::make('image', 'crb_houses_hero_image', 'Изображение первого экрана')
                ->set_width(33),
            Field::make('text', 'crb_houses_hero_heading', 'Заголовок')
                ->set_width(33),
            Field::make('text', 'crb_houses_hero_description', 'подзаголовок')
                ->set_width(33),

            Field::make('text', 'crb_houses_services_head', 'Услуги - Заголовок')
                ->set_classes('field-heading')
                ->set_width(50),
            Field::make('rich_text', 'crb_houses_services_desc', 'Описание')
                ->set_width(50),
            Field::make('complex', 'crb_houses_services_items', 'Список услуг')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_houses_service_img', 'Изображение услуги')
                        ->set_width(33),
                    Field::make('text', 'crb_houses_service_head', 'Название услуги')
                        ->set_width(33),
                    Field::make('rich_text', 'crb_houses_service_desc', 'Описание')
                        ->set_width(33),
                )),

            Field::make('text', 'crb_houses_works_head', 'Наши работы - Заголовок')
                ->set_classes('field-heading')
                ->set_width(100),
            Field::make('text', 'crb_houses_works_desc', 'Описание')
                ->set_width(50),
            Field::make('complex', 'crb_houses_works_items', 'Фото работ')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_houses_work_img', 'Изображение услуги')
                        ->set_width(33),
                )),


            Field::make('text', 'crb_houses_types_head', 'Виды продукции')
                ->set_classes('field-heading')
                ->set_width(100),

            Field::make('complex', 'crb_houses_types_items', 'Фото типов')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_houses_type_img', 'Изображение типа')
                        ->set_width(33),
                    Field::make('text', 'crb_houses_type_head', 'Название')
                        ->set_width(33),
                    Field::make('text', 'crb_houses_type_desc', 'Описание')
                        ->set_width(33),
                )),

            Field::make('text', 'crb_houses_production_head', 'Производство - Заголовок')
                ->set_classes('field-heading')
                ->set_width(100),
            Field::make('rich_text', 'crb_houses_production_text', 'Текст')
                ->set_width(50),
            Field::make('complex', 'crb_houses_catalog', 'Каталог')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_houses_catalog_img', 'Изображение')
                        ->set_width(33),
                    Field::make('text', 'crb_houses_catalog_head', 'Заголовок')
                        ->set_width(33),
                    Field::make('text', 'crb_houses_catalog_price', 'Цена')
                        ->set_width(33),
                    Field::make('rich_text', 'crb_houses_catalog_text', 'Характеристики')
                        ->set_width(33),
                    Field::make('text', 'crb_houses_catalog_button', 'Ссылка кнопки')
                        ->set_width(50),
                )),

            Field::make('text', 'crb_houses_offer', 'Специальное предложение - Заголовок')
                ->set_classes('field-heading')
                ->set_width(100),

            Field::make('rich_text', 'crb_houses_offer_text', 'Текст')
                ->set_width(50),

            Field::make('image', 'crb_houses_offer_bg', 'Изображение')
                ->set_width(50),

            Field::make('text', 'crb_houses_feedback_head', 'Отзывы - Заголовок')
                ->set_classes('field-heading')
                ->set_width(100),
            Field::make('complex', 'crb_houses_feedback_list', 'Отзывы')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_houses_feedback_img', 'Фото')
                        ->set_width(20),
                    Field::make('text', 'crb_houses_feedback_name', 'Имя')
                        ->set_width(20),
                    Field::make('rich_text', 'crb_houses_feedback_text', 'Текст отзыва')
                        ->set_width(60),
                )),

        ))

        ->add_tab(__('Шаблон Пластиковые двери'), array(
            Field::make('image', 'crb_pldoors_hero_image', 'Изображение первого экрана')
                ->set_width(33),
            Field::make('text', 'crb_pldoors_hero_heading', 'Заголовок')
                ->set_width(33),
            Field::make('text', 'crb_pldoors_hero_description', 'подзаголовок')
                ->set_width(33),

            Field::make('text', 'crb_pldoors_services_head', 'Услуги - Заголовок')
                ->set_classes('field-heading')
                ->set_width(50),
            Field::make('rich_text', 'crb_pldoors_services_desc', 'Описание')
                ->set_width(50),
            Field::make('complex', 'crb_pldoors_services_items', 'Список услуг')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_pldoors_service_img', 'Изображение услуги')
                        ->set_width(33),
                    Field::make('text', 'crb_pldoors_service_head', 'Название услуги')
                        ->set_width(33),
                    Field::make('rich_text', 'crb_pldoors_service_desc', 'Описание')
                        ->set_width(33),
                )),

            Field::make('text', 'crb_pldoors_works_head', 'Наши работы - Заголовок')
                ->set_classes('field-heading')
                ->set_width(100),
            Field::make('text', 'crb_pldoors_works_desc', 'Описание')
                ->set_width(50),
            Field::make('complex', 'crb_pldoors_works_items', 'Фото работ')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_pldoors_work_img', 'Изображение услуги')
                        ->set_width(33),
                )),


            Field::make('text', 'crb_pldoors_types_head', 'Виды продукции')
                ->set_classes('field-heading')
                ->set_width(100),

            Field::make('complex', 'crb_pldoors_types_items', 'Фото типов')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_pldoors_type_img', 'Изображение типа')
                        ->set_width(33),
                    Field::make('text', 'crb_pldoors_type_head', 'Название')
                        ->set_width(33),
                    Field::make('text', 'crb_pldoors_type_desc', 'Описание')
                        ->set_width(33),
                )),

            Field::make('text', 'crb_pldoors_production_head', 'Производство - Заголовок')
                ->set_classes('field-heading')
                ->set_width(100),
            Field::make('rich_text', 'crb_pldoors_production_text', 'Текст')
                ->set_width(50),
            Field::make('complex', 'crb_pldoors_catalog', 'Каталог')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_pldoors_catalog_img', 'Изображение')
                        ->set_width(33),
                    Field::make('text', 'crb_pldoors_catalog_head', 'Заголовок')
                        ->set_width(33),
                    Field::make('text', 'crb_pldoors_catalog_price', 'Цена')
                        ->set_width(33),
                    Field::make('rich_text', 'crb_pldoors_catalog_text', 'Характеристики')
                        ->set_width(33),
                    Field::make('text', 'crb_pldoors_catalog_button', 'Ссылка кнопки')
                        ->set_width(50),
                )),

            Field::make('text', 'crb_pldoors_offer', 'Специальное предложение - Заголовок')
                ->set_classes('field-heading')
                ->set_width(100),

            Field::make('rich_text', 'crb_pldoors_offer_text', 'Текст')
                ->set_width(50),

            Field::make('image', 'crb_pldoors_offer_bg', 'Изображение')
                ->set_width(50),

            Field::make('text', 'crb_pldoors_feedback_head', 'Отзывы - Заголовок')
                ->set_classes('field-heading')
                ->set_width(100),
            Field::make('complex', 'crb_pldoors_feedback_list', 'Отзывы')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_pldoors_feedback_img', 'Фото')
                        ->set_width(20),
                    Field::make('text', 'crb_pldoors_feedback_name', 'Имя')
                        ->set_width(20),
                    Field::make('rich_text', 'crb_pldoors_feedback_text', 'Текст отзыва')
                        ->set_width(60),
                )),

        ))

        ->add_tab(__('Шаблон Новостройки'), array(
            Field::make('image', 'crb_nb_hero_image', 'Изображение первого экрана')
                ->set_width(33),
            Field::make('text', 'crb_nb_hero_heading', 'Заголовок')
                ->set_width(33),
            Field::make('text', 'crb_nb_hero_description', 'подзаголовок')
                ->set_width(33),

            Field::make('text', 'crb_nb_services_head', 'Услуги - Заголовок')
                ->set_classes('field-heading')
                ->set_width(50),
            Field::make('rich_text', 'crb_nb_services_desc', 'Описание')
                ->set_width(50),
            Field::make('complex', 'crb_nb_services_items', 'Список услуг')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_nb_service_img', 'Изображение услуги')
                        ->set_width(33),
                    Field::make('text', 'crb_nb_service_head', 'Название услуги')
                        ->set_width(33),
                    Field::make('rich_text', 'crb_nb_service_desc', 'Описание')
                        ->set_width(33),
                )),

            Field::make('text', 'crb_nb_works_head', 'Наши работы - Заголовок')
                ->set_classes('field-heading')
                ->set_width(100),
            Field::make('text', 'crb_nb_works_desc', 'Описание')
                ->set_width(50),
            Field::make('complex', 'crb_nb_works_items', 'Фото работ')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_nb_work_img', 'Изображение услуги')
                        ->set_width(33),
                )),


            Field::make('text', 'crb_nb_types_head', 'Виды продукции')
                ->set_classes('field-heading')
                ->set_width(100),

            Field::make('complex', 'crb_nb_types_items', 'Фото типов')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_nb_type_img', 'Изображение типа')
                        ->set_width(33),
                    Field::make('text', 'crb_nb_type_head', 'Название')
                        ->set_width(33),
                    Field::make('text', 'crb_nb_type_desc', 'Описание')
                        ->set_width(33),
                )),

            Field::make('text', 'crb_nb_production_head', 'Производство - Заголовок')
                ->set_classes('field-heading')
                ->set_width(100),
            Field::make('rich_text', 'crb_nb_production_text', 'Текст')
                ->set_width(50),
            Field::make('complex', 'crb_nb_catalog', 'Каталог')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_nb_catalog_img', 'Изображение')
                        ->set_width(33),
                    Field::make('text', 'crb_nb_catalog_head', 'Заголовок')
                        ->set_width(33),
                    Field::make('text', 'crb_nb_catalog_price', 'Цена')
                        ->set_width(33),
                    Field::make('rich_text', 'crb_nb_catalog_text', 'Характеристики')
                        ->set_width(33),
                    Field::make('text', 'crb_nb_catalog_button', 'Ссылка кнопки')
                        ->set_width(50),
                )),

            Field::make('text', 'crb_nb_offer', 'Специальное предложение - Заголовок')
                ->set_classes('field-heading')
                ->set_width(100),

            Field::make('rich_text', 'crb_nb_offer_text', 'Текст')
                ->set_width(50),

            Field::make('image', 'crb_nb_offer_bg', 'Изображение')
                ->set_width(50),

            Field::make('text', 'crb_nb_feedback_head', 'Отзывы - Заголовок')
                ->set_classes('field-heading')
                ->set_width(100),
            Field::make('complex', 'crb_nb_feedback_list', 'Отзывы')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_nb_feedback_img', 'Фото')
                        ->set_width(20),
                    Field::make('text', 'crb_nb_feedback_name', 'Имя')
                        ->set_width(20),
                    Field::make('rich_text', 'crb_nb_feedback_text', 'Текст отзыва')
                        ->set_width(60),
                )),

        ))

        ->add_tab(__('Шаблон Окна Rehau'), array(
            Field::make('image', 'crb_windows_hero_image', 'Изображение первого экрана')
                ->set_width(33),
            Field::make('text', 'crb_windows_hero_heading', 'Заголовок')
                ->set_width(33),
            Field::make('text', 'crb_windows_hero_description', 'подзаголовок')
                ->set_width(33),

            Field::make('text', 'crb_windows_services_head', 'Услуги - Заголовок')
                ->set_classes('field-heading')
                ->set_width(50),
            Field::make('rich_text', 'crb_windows_services_desc', 'Описание')
                ->set_width(50),
            Field::make('complex', 'crb_windows_services_items', 'Список услуг')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_windows_service_img', 'Изображение услуги')
                        ->set_width(33),
                    Field::make('text', 'crb_windows_service_head', 'Название услуги')
                        ->set_width(33),
                    Field::make('rich_text', 'crb_windows_service_desc', 'Описание')
                        ->set_width(33),
                )),

            Field::make('text', 'crb_windows_works_head', 'Наши работы - Заголовок')
                ->set_classes('field-heading')
                ->set_width(100),
            Field::make('text', 'crb_windows_works_desc', 'Описание')
                ->set_width(50),
            Field::make('complex', 'crb_windows_works_items', 'Фото работ')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_windows_work_img', 'Изображение услуги')
                        ->set_width(33),
                )),


            Field::make('text', 'crb_windows_types_head', 'Виды продукции')
                ->set_classes('field-heading')
                ->set_width(100),

            Field::make('complex', 'crb_windows_types_items', 'Фото типов')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_windows_type_img', 'Изображение типа')
                        ->set_width(33),
                    Field::make('text', 'crb_windows_type_head', 'Название')
                        ->set_width(33),
                    Field::make('text', 'crb_windows_type_desc', 'Описание')
                        ->set_width(33),
                )),

            Field::make('text', 'crb_windows_production_head', 'Производство - Заголовок')
                ->set_classes('field-heading')
                ->set_width(100),
            Field::make('rich_text', 'crb_windows_production_text', 'Текст')
                ->set_width(50),
            Field::make('complex', 'crb_windows_catalog', 'Каталог')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_windows_catalog_img', 'Изображение')
                        ->set_width(33),
                    Field::make('text', 'crb_windows_catalog_head', 'Заголовок')
                        ->set_width(33),
                    Field::make('text', 'crb_windows_catalog_price', 'Цена')
                        ->set_width(33),
                    Field::make('rich_text', 'crb_windows_catalog_text', 'Характеристики')
                        ->set_width(33),
                    Field::make('text', 'crb_windows_catalog_button', 'Ссылка кнопки')
                        ->set_width(50),
                )),

            Field::make('text', 'crb_windows_offer', 'Специальное предложение - Заголовок')
                ->set_classes('field-heading')
                ->set_width(100),

            Field::make('rich_text', 'crb_windows_offer_text', 'Текст')
                ->set_width(50),

            Field::make('image', 'crb_windows_offer_bg', 'Изображение')
                ->set_width(50),

            Field::make('text', 'crb_windows_feedback_head', 'Отзывы - Заголовок')
                ->set_classes('field-heading')
                ->set_width(100),
            Field::make('complex', 'crb_windows_feedback_list', 'Отзывы')
                ->set_collapsed('true')
                ->add_fields(array(
                    Field::make('image', 'crb_windows_feedback_img', 'Фото')
                        ->set_width(20),
                    Field::make('text', 'crb_windows_feedback_name', 'Имя')
                        ->set_width(20),
                    Field::make('rich_text', 'crb_windows_feedback_text', 'Текст отзыва')
                        ->set_width(60),
                )),

        ));
}

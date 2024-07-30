<?php

// WordPress title tag management
add_theme_support('title-tag');

// ########## MENUS ##########

// Enable menus feature
add_theme_support('menus');

// Define menus locations
register_nav_menus([
	'main-menu'  => 'Main navigation',
	'footer-menu'     => 'Footer navigation'
]);
add_action('acf/include_fields', function () {
	if (!function_exists('acf_add_local_field_group')) {
		return;
	}

	acf_add_local_field_group(array(
		'key' => 'group_6687b8624c9e2',
		'title' => 'Accueil',
		'fields' => array(
			array(
				'key' => 'field_6687b8622a8ff',
				'label' => 'Titre du header',
				'name' => 'home__header_title',
				'aria-label' => '',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_6687ba0d2a900',
				'label' => 'Sous-Titre du header',
				'name' => 'home__header_subtitle',
				'aria-label' => '',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_6687ba562a901',
				'label' => 'image de fond',
				'name' => 'home__header_wallpaper',
				'aria-label' => '',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
				'preview_size' => 'large',
			),
			array(
				'key' => 'field_6687c46493b81',
				'label' => 'Les animaux du moment',
				'name' => 'home__header_animaux',
				'aria-label' => '',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'layout' => 'table',
				'pagination' => 0,
				'min' => 0,
				'max' => 0,
				'collapsed' => '',
				'button_label' => 'Ajouter un élément',
				'rows_per_page' => 20,
				'sub_fields' => array(
					array(
						'key' => 'field_6687c6af93b82',
						'label' => 'Nom de l\'animal',
						'name' => 'name',
						'aria-label' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'maxlength' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'parent_repeater' => 'field_6687c46493b81',
					),
					array(
						'key' => 'field_6687c6f893b83',
						'label' => 'Photo de l\'animal',
						'name' => 'picture',
						'aria-label' => '',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'url',
						'library' => 'all',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
						'preview_size' => 'medium',
						'parent_repeater' => 'field_6687c46493b81',
					),
					array(
						'key' => 'field_6691439b9fc00',
						'label' => 'bouton',
						'name' => 'bouton',
						'aria-label' => '',
						'type' => 'group',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'layout' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_669143b29fc01',
								'label' => 'titre bouton',
								'name' => 'titre_bouton',
								'aria-label' => '',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'maxlength' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
							),
							array(
								'key' => 'field_669143c19fc02',
								'label' => 'lien bouton',
								'name' => 'lien_bouton',
								'aria-label' => '',
								'type' => 'link',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'return_format' => 'url',
							),
						),
						'parent_repeater' => 'field_6687c46493b81',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'page_type',
					'operator' => '==',
					'value' => 'front_page',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array(
			0 => 'the_content',
		),
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));

	acf_add_local_field_group(array(
		'key' => 'group_6687e9868a122',
		'title' => 'Animal',
		'fields' => array(
			array(
				'key' => 'field_6687e98693272',
				'label' => 'Date de naissance',
				'name' => 'animal__birthday',
				'aria-label' => '',
				'type' => 'date_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'display_format' => 'd/m/Y',
				'return_format' => 'd/m/Y',
				'first_day' => 1,
			),
			array(
				'key' => 'field_668facfe08b3e',
				'label' => 'Lof',
				'name' => 'lof2',
				'aria-label' => '',
				'type' => 'checkbox',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'Lof' => 'Oui',
				),
				'default_value' => array(),
				'return_format' => 'value',
				'allow_custom' => 0,
				'layout' => 'vertical',
				'toggle' => 0,
				'save_custom' => 0,
				'custom_choice_button_text' => 'Ajouter un nouveau choix',
			),
			array(
				'key' => 'field_668fecb399c77',
				'label' => 'photo de l\'animal',
				'name' => 'photo_de_lanimal',
				'aria-label' => '',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
				'preview_size' => 'medium',
			),
			array(
				'key' => 'field_6690d31cd8e49',
				'label' => 'Nom de l\'animal',
				'name' => 'nom_de_lanimal',
				'aria-label' => '',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_669141e6c06f0',
				'label' => 'Bouton',
				'name' => 'bouton',
				'aria-label' => '',
				'type' => 'group',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'layout' => 'block',
				'sub_fields' => array(
					array(
						'key' => 'field_66914209c06f1',
						'label' => 'titre du bouton',
						'name' => 'titre_du_bouton',
						'aria-label' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => 'voir plus',
						'maxlength' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
					),
					array(
						'key' => 'field_66914224c06f2',
						'label' => 'lien du bouton',
						'name' => 'lien_du_bouton',
						'aria-label' => '',
						'type' => 'link',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'url',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'animal',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));

	acf_add_local_field_group(array(
		'key' => 'group_669920a259e3c',
		'title' => 'Animatch page animaux',
		'fields' => array(
			array(
				'key' => 'field_669920a4398be',
				'label' => 'Galerie',
				'name' => 'galerie',
				'aria-label' => '',
				'type' => 'gallery',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'library' => 'all',
				'min' => '',
				'max' => '',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
				'insert' => 'append',
				'preview_size' => 'medium',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'animal',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));

	acf_add_local_field_group(array(
		'key' => 'group_66912c3c7d1ba',
		'title' => 'Genre animal',
		'fields' => array(
			array(
				'key' => 'field_66912c3c51e3f',
				'label' => 'illustration genre animal',
				'name' => 'illustration_genre_animal',
				'aria-label' => '',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
				'preview_size' => 'medium',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'taxonomy',
					'operator' => '==',
					'value' => 'genre_animal',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));

	acf_add_local_field_group(array(
		'key' => 'group_6687fb8bc28a2',
		'title' => 'ville',
		'fields' => array(
			array(
				'key' => 'field_6687fb8c67103',
				'label' => 'illustration',
				'name' => 'ville_illustration',
				'aria-label' => '',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
				'preview_size' => 'medium',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'taxonomy',
					'operator' => '==',
					'value' => 'ville',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));
});

function cptui_register_my_cpts()
{

	/**
	 * Post Type: animaux.
	 */

	$labels = [
		"name" => esc_html__("animaux", "custom-post-type-ui"),
		"singular_name" => esc_html__("animal", "custom-post-type-ui"),
		"menu_name" => esc_html__("Mes animaux", "custom-post-type-ui"),
		"all_items" => esc_html__("Tous les animaux", "custom-post-type-ui"),
		"add_new" => esc_html__("Ajouter un nouveau", "custom-post-type-ui"),
		"add_new_item" => esc_html__("Ajouter un nouvel animal", "custom-post-type-ui"),
		"edit_item" => esc_html__("Modifier animal", "custom-post-type-ui"),
		"new_item" => esc_html__("Nouvel animal", "custom-post-type-ui"),
		"view_item" => esc_html__("Voir animal", "custom-post-type-ui"),
		"view_items" => esc_html__("Voir animaux", "custom-post-type-ui"),
		"search_items" => esc_html__("Recherche de animaux", "custom-post-type-ui"),
		"not_found" => esc_html__("Aucun animaux trouvé", "custom-post-type-ui"),
		"not_found_in_trash" => esc_html__("Aucun animaux trouvé dans la corbeille", "custom-post-type-ui"),
		"parent" => esc_html__("animal parent :", "custom-post-type-ui"),
		"featured_image" => esc_html__("Image mise en avant pour ce animal", "custom-post-type-ui"),
		"set_featured_image" => esc_html__("Définir l’image mise en avant pour ce animal", "custom-post-type-ui"),
		"remove_featured_image" => esc_html__("Retirer l’image mise en avant pour ce animal", "custom-post-type-ui"),
		"use_featured_image" => esc_html__("Utiliser comme image mise en avant pour ce animal", "custom-post-type-ui"),
		"archives" => esc_html__("Archives de animal", "custom-post-type-ui"),
		"insert_into_item" => esc_html__("Insérer dans animal", "custom-post-type-ui"),
		"uploaded_to_this_item" => esc_html__("Téléverser sur ce animal", "custom-post-type-ui"),
		"filter_items_list" => esc_html__("Filtrer la liste de animaux", "custom-post-type-ui"),
		"items_list_navigation" => esc_html__("Navigation de liste de animaux", "custom-post-type-ui"),
		"items_list" => esc_html__("Liste de animaux", "custom-post-type-ui"),
		"attributes" => esc_html__("Attributs de animaux", "custom-post-type-ui"),
		"name_admin_bar" => esc_html__("animal", "custom-post-type-ui"),
		"item_published" => esc_html__("animal publié", "custom-post-type-ui"),
		"item_published_privately" => esc_html__("animal publié en privé.", "custom-post-type-ui"),
		"item_reverted_to_draft" => esc_html__("animal repassé en brouillon.", "custom-post-type-ui"),
		"item_trashed" => esc_html__("animal mis à la corbeille.", "custom-post-type-ui"),
		"item_scheduled" => esc_html__("animal planifié", "custom-post-type-ui"),
		"item_updated" => esc_html__("animal mis à jour.", "custom-post-type-ui"),
		"parent_item_colon" => esc_html__("animal parent :", "custom-post-type-ui"),
	];

	$args = [
		"label" => esc_html__("animaux", "custom-post-type-ui"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"can_export" => false,
		"rewrite" => ["slug" => "animal", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-admin-site",
		"supports" => ["title", "page-attributes"],
		"show_in_graphql" => false,
	];

	register_post_type("animal", $args);
}

add_action('init', 'cptui_register_my_cpts');
function cptui_register_my_taxes()
{

	/**
	 * Taxonomy: villes.
	 */

	$labels = [
		"name" => esc_html__("villes", "custom-post-type-ui"),
		"singular_name" => esc_html__("ville", "custom-post-type-ui"),
	];


	$args = [
		"label" => esc_html__("villes", "custom-post-type-ui"),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => ['slug' => 'ville', 'with_front' => true,],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "ville",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy("ville", ["animal"], $args);

	/**
	 * Taxonomy: genre animaux.
	 */

	$labels = [
		"name" => esc_html__("genre animaux", "custom-post-type-ui"),
		"singular_name" => esc_html__("genre animal", "custom-post-type-ui"),
	];


	$args = [
		"label" => esc_html__("genre animaux", "custom-post-type-ui"),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => ['slug' => 'genre_animal', 'with_front' => true,],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "genre_animal",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy("genre_animal", ["animal"], $args);
}
add_action('init', 'cptui_register_my_taxes');

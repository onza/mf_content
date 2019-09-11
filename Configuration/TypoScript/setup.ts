tt_content.mfcontent_accordion = FLUIDTEMPLATE
tt_content.mfcontent_accordion {
    layoutRootPaths.0 = EXT:mf_content/Resources/Private/Layouts/
    layoutRootPaths.10 = {$plugin.tx_mfcontent.view.layoutRootPath}
    partialRootPaths.0 = EXT:mf_content/Resources/Private/Partials/
    partialRootPaths.10 = {$plugin.tx_mfcontent.view.partialRootPath}
    templateRootPaths.0 = EXT:mf_content/Resources/Private/Templates/Content/
    templateRootPaths.10 = {$plugin.tx_mfcontent.view.templateRootPath}
    templateName = Accordion
    dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
    dataProcessing.10 {
        if.isTrue.field = tx_mfcontent_accordion_items
        table = tx_mfcontent_accordion_items
        pidInList.field = pid
        where = parentid=###uid### AND deleted=0 AND hidden=0
        orderBy = sorting
        markers.uid.field = uid
        as = data_tx_mfcontent_accordion_items
    }
}
tt_content.mfcontent_buttonlink = FLUIDTEMPLATE
tt_content.mfcontent_buttonlink {
    layoutRootPaths.0 = EXT:mf_content/Resources/Private/Layouts/
    layoutRootPaths.10 = {$plugin.tx_mfcontent.view.layoutRootPath}
    partialRootPaths.0 = EXT:mf_content/Resources/Private/Partials/
    partialRootPaths.10 = {$plugin.tx_mfcontent.view.partialRootPath}
    templateRootPaths.0 = EXT:mf_content/Resources/Private/Templates/Content/
    templateRootPaths.10 = {$plugin.tx_mfcontent.view.templateRootPath}
    templateName = Buttonlink
}
tt_content.mfcontent_card = FLUIDTEMPLATE
tt_content.mfcontent_card {
    layoutRootPaths.0 = EXT:mf_content/Resources/Private/Layouts/
    layoutRootPaths.10 = {$plugin.tx_mfcontent.view.layoutRootPath}
    partialRootPaths.0 = EXT:mf_content/Resources/Private/Partials/
    partialRootPaths.10 = {$plugin.tx_mfcontent.view.partialRootPath}
    templateRootPaths.0 = EXT:mf_content/Resources/Private/Templates/Content/
    templateRootPaths.10 = {$plugin.tx_mfcontent.view.templateRootPath}
    templateName = Card
    dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
    dataProcessing.10 {
        if.isTrue.field = image
        references {
            fieldName = image
            table = tt_content
        }
        as = data_image
    }
}
tt_content.mfcontent_gallery_lightbox = FLUIDTEMPLATE
tt_content.mfcontent_gallery_lightbox {
    layoutRootPaths.0 = EXT:mf_content/Resources/Private/Layouts/
    layoutRootPaths.10 = {$plugin.tx_mfcontent.view.layoutRootPath}
    partialRootPaths.0 = EXT:mf_content/Resources/Private/Partials/
    partialRootPaths.10 = {$plugin.tx_mfcontent.view.partialRootPath}
    templateRootPaths.0 = EXT:mf_content/Resources/Private/Templates/Content/
    templateRootPaths.10 = {$plugin.tx_mfcontent.view.templateRootPath}
    templateName = GalleryLightbox
    dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
    dataProcessing.10 {
        if.isTrue.field = image
        references {
            fieldName = image
            table = tt_content
        }
        as = data_image
    }
}
tt_content.mfcontent_gallery_simple = FLUIDTEMPLATE
tt_content.mfcontent_gallery_simple {
    layoutRootPaths.0 = EXT:mf_content/Resources/Private/Layouts/
    layoutRootPaths.10 = {$plugin.tx_mfcontent.view.layoutRootPath}
    partialRootPaths.0 = EXT:mf_content/Resources/Private/Partials/
    partialRootPaths.10 = {$plugin.tx_mfcontent.view.partialRootPath}
    templateRootPaths.0 = EXT:mf_content/Resources/Private/Templates/Content/
    templateRootPaths.10 = {$plugin.tx_mfcontent.view.templateRootPath}
    templateName = GallerySimple
    dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
    dataProcessing.10 {
        if.isTrue.field = image
        references {
            fieldName = image
            table = tt_content
        }
        as = data_image
    }
}
tt_content.mfcontent_header_hero = FLUIDTEMPLATE
tt_content.mfcontent_header_hero {
    layoutRootPaths.0 = EXT:mf_content/Resources/Private/Layouts/
    layoutRootPaths.10 = {$plugin.tx_mfcontent.view.layoutRootPath}
    partialRootPaths.0 = EXT:mf_content/Resources/Private/Partials/
    partialRootPaths.10 = {$plugin.tx_mfcontent.view.partialRootPath}
    templateRootPaths.0 = EXT:mf_content/Resources/Private/Templates/Content/
    templateRootPaths.10 = {$plugin.tx_mfcontent.view.templateRootPath}
    templateName = HeaderHero
    dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
    dataProcessing.10 {
        if.isTrue.field = image
        references {
            fieldName = image
            table = tt_content
        }
        as = data_image
    }
    dataProcessing.20 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
    dataProcessing.20 {
        if.isTrue.field = tx_mfcontent_svg_icon
        references {
            fieldName = tx_mfcontent_svg_icon
            table = tt_content
        }
        as = data_tx_mfcontent_svg_icon
    }
}
tt_content.mfcontent_header_image = FLUIDTEMPLATE
tt_content.mfcontent_header_image {
    layoutRootPaths.0 = EXT:mf_content/Resources/Private/Layouts/
    layoutRootPaths.10 = {$plugin.tx_mfcontent.view.layoutRootPath}
    partialRootPaths.0 = EXT:mf_content/Resources/Private/Partials/
    partialRootPaths.10 = {$plugin.tx_mfcontent.view.partialRootPath}
    templateRootPaths.0 = EXT:mf_content/Resources/Private/Templates/Content/
    templateRootPaths.10 = {$plugin.tx_mfcontent.view.templateRootPath}
    templateName = HeaderImage
    dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
    dataProcessing.10 {
        if.isTrue.field = image
        references {
            fieldName = image
            table = tt_content
        }
        as = data_image
    }
}
tt_content.mfcontent_header_slider = FLUIDTEMPLATE
tt_content.mfcontent_header_slider {
    layoutRootPaths.0 = EXT:mf_content/Resources/Private/Layouts/
    layoutRootPaths.10 = {$plugin.tx_mfcontent.view.layoutRootPath}
    partialRootPaths.0 = EXT:mf_content/Resources/Private/Partials/
    partialRootPaths.10 = {$plugin.tx_mfcontent.view.partialRootPath}
    templateRootPaths.0 = EXT:mf_content/Resources/Private/Templates/Content/
    templateRootPaths.10 = {$plugin.tx_mfcontent.view.templateRootPath}
    templateName = HeaderSlider
    dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
    dataProcessing.10 {
        if.isTrue.field = image
        references {
            fieldName = image
            table = tt_content
        }
        as = data_image
    }
}
tt_content.mfcontent_icon_infobox = FLUIDTEMPLATE
tt_content.mfcontent_icon_infobox {
    layoutRootPaths.0 = EXT:mf_content/Resources/Private/Layouts/
    layoutRootPaths.10 = {$plugin.tx_mfcontent.view.layoutRootPath}
    partialRootPaths.0 = EXT:mf_content/Resources/Private/Partials/
    partialRootPaths.10 = {$plugin.tx_mfcontent.view.partialRootPath}
    templateRootPaths.0 = EXT:mf_content/Resources/Private/Templates/Content/
    templateRootPaths.10 = {$plugin.tx_mfcontent.view.templateRootPath}
    templateName = IconInfobox
    dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
    dataProcessing.10 {
        if.isTrue.field = tx_mfcontent_iconinfobox_items
        table = tx_mfcontent_iconinfobox_items
        pidInList.field = pid
        where = parentid=###uid### AND deleted=0 AND hidden=0
        orderBy = sorting
        markers.uid.field = uid
        as = data_tx_mfcontent_iconinfobox_items
    }
dataProcessing.10 {
        dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
    dataProcessing.10 {
        if.isTrue.field = tx_mfcontent_iconinfobox_icon
        references {
            fieldName = tx_mfcontent_iconinfobox_icon
            table = tx_mfcontent_iconinfobox_items
        }
        as = data_tx_mfcontent_iconinfobox_icon
    }

}
}
tt_content.mfcontent_info_numbers = FLUIDTEMPLATE
tt_content.mfcontent_info_numbers {
    layoutRootPaths.0 = EXT:mf_content/Resources/Private/Layouts/
    layoutRootPaths.10 = {$plugin.tx_mfcontent.view.layoutRootPath}
    partialRootPaths.0 = EXT:mf_content/Resources/Private/Partials/
    partialRootPaths.10 = {$plugin.tx_mfcontent.view.partialRootPath}
    templateRootPaths.0 = EXT:mf_content/Resources/Private/Templates/Content/
    templateRootPaths.10 = {$plugin.tx_mfcontent.view.templateRootPath}
    templateName = InfoNumbers
    dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
    dataProcessing.10 {
        if.isTrue.field = tx_mfcontent_infonumbers_items
        table = tx_mfcontent_infonumbers_items
        pidInList.field = pid
        where = parentid=###uid### AND deleted=0 AND hidden=0
        orderBy = sorting
        markers.uid.field = uid
        as = data_tx_mfcontent_infonumbers_items
    }
dataProcessing.10 {
        dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
    dataProcessing.10 {
        if.isTrue.field = tx_mfcontent_infonumbers_icon
        references {
            fieldName = tx_mfcontent_infonumbers_icon
            table = tx_mfcontent_infonumbers_items
        }
        as = data_tx_mfcontent_infonumbers_icon
    }

}
}
tt_content.mfcontent_sm_footernavi = FLUIDTEMPLATE
tt_content.mfcontent_sm_footernavi {
    layoutRootPaths.0 = EXT:mf_content/Resources/Private/Layouts/
    layoutRootPaths.10 = {$plugin.tx_mfcontent.view.layoutRootPath}
    partialRootPaths.0 = EXT:mf_content/Resources/Private/Partials/
    partialRootPaths.10 = {$plugin.tx_mfcontent.view.partialRootPath}
    templateRootPaths.0 = EXT:mf_content/Resources/Private/Templates/Content/
    templateRootPaths.10 = {$plugin.tx_mfcontent.view.templateRootPath}
    templateName = SmFooternavi
    dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
    dataProcessing.10 {
        if.isTrue.field = tx_mfcontent_smfooternavi_items
        table = tx_mfcontent_smfooternavi_items
        pidInList.field = pid
        where = parentid=###uid### AND deleted=0 AND hidden=0
        orderBy = sorting
        markers.uid.field = uid
        as = data_tx_mfcontent_smfooternavi_items
    }
dataProcessing.10 {
        dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
    dataProcessing.10 {
        if.isTrue.field = tx_mfcontent_smfooternavi_icon
        references {
            fieldName = tx_mfcontent_smfooternavi_icon
            table = tx_mfcontent_smfooternavi_items
        }
        as = data_tx_mfcontent_smfooternavi_icon
    }

}
}
tt_content.mfcontent_tabbed_content = FLUIDTEMPLATE
tt_content.mfcontent_tabbed_content {
    layoutRootPaths.0 = EXT:mf_content/Resources/Private/Layouts/
    layoutRootPaths.10 = {$plugin.tx_mfcontent.view.layoutRootPath}
    partialRootPaths.0 = EXT:mf_content/Resources/Private/Partials/
    partialRootPaths.10 = {$plugin.tx_mfcontent.view.partialRootPath}
    templateRootPaths.0 = EXT:mf_content/Resources/Private/Templates/Content/
    templateRootPaths.10 = {$plugin.tx_mfcontent.view.templateRootPath}
    templateName = TabbedContent
    dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
    dataProcessing.10 {
        if.isTrue.field = tx_mfcontent_tabbedcontent_items
        table = tx_mfcontent_tabbedcontent_items
        pidInList.field = pid
        where = parentid=###uid### AND deleted=0 AND hidden=0
        orderBy = sorting
        markers.uid.field = uid
        as = data_tx_mfcontent_tabbedcontent_items
    }
}
tt_content.mfcontent_teaserbox = FLUIDTEMPLATE
tt_content.mfcontent_teaserbox {
    layoutRootPaths.0 = EXT:mf_content/Resources/Private/Layouts/
    layoutRootPaths.10 = {$plugin.tx_mfcontent.view.layoutRootPath}
    partialRootPaths.0 = EXT:mf_content/Resources/Private/Partials/
    partialRootPaths.10 = {$plugin.tx_mfcontent.view.partialRootPath}
    templateRootPaths.0 = EXT:mf_content/Resources/Private/Templates/Content/
    templateRootPaths.10 = {$plugin.tx_mfcontent.view.templateRootPath}
    templateName = Teaserbox
    dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
    dataProcessing.10 {
        if.isTrue.field = image
        references {
            fieldName = image
            table = tt_content
        }
        as = data_image
    }
}
tt_content.mfcontent_text = FLUIDTEMPLATE
tt_content.mfcontent_text {
    layoutRootPaths.0 = EXT:mf_content/Resources/Private/Layouts/
    layoutRootPaths.10 = {$plugin.tx_mfcontent.view.layoutRootPath}
    partialRootPaths.0 = EXT:mf_content/Resources/Private/Partials/
    partialRootPaths.10 = {$plugin.tx_mfcontent.view.partialRootPath}
    templateRootPaths.0 = EXT:mf_content/Resources/Private/Templates/Content/
    templateRootPaths.10 = {$plugin.tx_mfcontent.view.templateRootPath}
    templateName = Text
}
tt_content.mfcontent_text_with_image = FLUIDTEMPLATE
tt_content.mfcontent_text_with_image {
    layoutRootPaths.0 = EXT:mf_content/Resources/Private/Layouts/
    layoutRootPaths.10 = {$plugin.tx_mfcontent.view.layoutRootPath}
    partialRootPaths.0 = EXT:mf_content/Resources/Private/Partials/
    partialRootPaths.10 = {$plugin.tx_mfcontent.view.partialRootPath}
    templateRootPaths.0 = EXT:mf_content/Resources/Private/Templates/Content/
    templateRootPaths.10 = {$plugin.tx_mfcontent.view.templateRootPath}
    templateName = TextWithImage
    dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
    dataProcessing.10 {
        if.isTrue.field = image
        references {
            fieldName = image
            table = tt_content
        }
        as = data_image
    }
}

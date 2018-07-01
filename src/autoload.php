<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'ezcbase' => '/../vendor/zetacomponents/base/src/base.php',
                'ezcbaseautoloadexception' => '/../vendor/zetacomponents/base/src/exceptions/autoload.php',
                'ezcbaseautoloadoptions' => '/../vendor/zetacomponents/base/src/options/autoload.php',
                'ezcbaseconfigurationinitializer' => '/../vendor/zetacomponents/base/src/interfaces/configuration_initializer.php',
                'ezcbasedoubleclassrepositoryprefixexception' => '/../vendor/zetacomponents/base/src/exceptions/double_class_repository_prefix.php',
                'ezcbaseexception' => '/../vendor/zetacomponents/base/src/exceptions/exception.php',
                'ezcbaseexportable' => '/../vendor/zetacomponents/base/src/interfaces/exportable.php',
                'ezcbaseextensionnotfoundexception' => '/../vendor/zetacomponents/base/src/exceptions/extension_not_found.php',
                'ezcbasefeatures' => '/../vendor/zetacomponents/base/src/features.php',
                'ezcbasefile' => '/../vendor/zetacomponents/base/src/file.php',
                'ezcbasefileexception' => '/../vendor/zetacomponents/base/src/exceptions/file_exception.php',
                'ezcbasefilefindcontext' => '/../vendor/zetacomponents/base/src/structs/file_find_context.php',
                'ezcbasefileioexception' => '/../vendor/zetacomponents/base/src/exceptions/file_io.php',
                'ezcbasefilenotfoundexception' => '/../vendor/zetacomponents/base/src/exceptions/file_not_found.php',
                'ezcbasefilepermissionexception' => '/../vendor/zetacomponents/base/src/exceptions/file_permission.php',
                'ezcbasefunctionalitynotsupportedexception' => '/../vendor/zetacomponents/base/src/exceptions/functionality_not_supported.php',
                'ezcbaseinit' => '/../vendor/zetacomponents/base/src/init.php',
                'ezcbaseinitcallbackconfiguredexception' => '/../vendor/zetacomponents/base/src/exceptions/init_callback_configured.php',
                'ezcbaseinitinvalidcallbackclassexception' => '/../vendor/zetacomponents/base/src/exceptions/invalid_callback_class.php',
                'ezcbaseinvalidparentclassexception' => '/../vendor/zetacomponents/base/src/exceptions/invalid_parent_class.php',
                'ezcbasemetadata' => '/../vendor/zetacomponents/base/src/metadata.php',
                'ezcbasemetadatapearreader' => '/../vendor/zetacomponents/base/src/metadata/pear.php',
                'ezcbasemetadatatarballreader' => '/../vendor/zetacomponents/base/src/metadata/tarball.php',
                'ezcbaseoptions' => '/../vendor/zetacomponents/base/src/options.php',
                'ezcbasepersistable' => '/../vendor/zetacomponents/base/src/interfaces/persistable.php',
                'ezcbasepropertynotfoundexception' => '/../vendor/zetacomponents/base/src/exceptions/property_not_found.php',
                'ezcbasepropertypermissionexception' => '/../vendor/zetacomponents/base/src/exceptions/property_permission.php',
                'ezcbaserepositorydirectory' => '/../vendor/zetacomponents/base/src/structs/repository_directory.php',
                'ezcbasesettingnotfoundexception' => '/../vendor/zetacomponents/base/src/exceptions/setting_not_found.php',
                'ezcbasesettingvalueexception' => '/../vendor/zetacomponents/base/src/exceptions/setting_value.php',
                'ezcbasestruct' => '/../vendor/zetacomponents/base/src/struct.php',
                'ezcbasevalueexception' => '/../vendor/zetacomponents/base/src/exceptions/value.php',
                'ezcbasewhateverexception' => '/../vendor/zetacomponents/base/src/exceptions/whatever.php',
                'ezcconsoleargument' => '/../vendor/zetacomponents/console-tools/src/input/argument.php',
                'ezcconsoleargumentalreadyregisteredexception' => '/../vendor/zetacomponents/console-tools/src/exceptions/argument_already_registered.php',
                'ezcconsoleargumentexception' => '/../vendor/zetacomponents/console-tools/src/exceptions/argument.php',
                'ezcconsoleargumentmandatoryviolationexception' => '/../vendor/zetacomponents/console-tools/src/exceptions/argument_mandatory_violation.php',
                'ezcconsolearguments' => '/../vendor/zetacomponents/console-tools/src/input/arguments.php',
                'ezcconsoleargumenttypeviolationexception' => '/../vendor/zetacomponents/console-tools/src/exceptions/argument_type_violation.php',
                'ezcconsoledialog' => '/../vendor/zetacomponents/console-tools/src/interfaces/dialog.php',
                'ezcconsoledialogabortexception' => '/../vendor/zetacomponents/console-tools/src/exceptions/dialog_abort.php',
                'ezcconsoledialogoptions' => '/../vendor/zetacomponents/console-tools/src/options/dialog.php',
                'ezcconsoledialogvalidator' => '/../vendor/zetacomponents/console-tools/src/interfaces/dialog_validator.php',
                'ezcconsoledialogviewer' => '/../vendor/zetacomponents/console-tools/src/dialog_viewer.php',
                'ezcconsoleexception' => '/../vendor/zetacomponents/console-tools/src/exceptions/exception.php',
                'ezcconsoleinput' => '/../vendor/zetacomponents/console-tools/src/input.php',
                'ezcconsoleinputhelpgenerator' => '/../vendor/zetacomponents/console-tools/src/interfaces/input_help_generator.php',
                'ezcconsoleinputstandardhelpgenerator' => '/../vendor/zetacomponents/console-tools/src/input/help_generators/standard.php',
                'ezcconsoleinputvalidator' => '/../vendor/zetacomponents/console-tools/src/interfaces/input_validator.php',
                'ezcconsoleinvalidoptionnameexception' => '/../vendor/zetacomponents/console-tools/src/exceptions/invalid_option_name.php',
                'ezcconsoleinvalidoutputtargetexception' => '/../vendor/zetacomponents/console-tools/src/exceptions/invalid_output_target.php',
                'ezcconsolemenudialog' => '/../vendor/zetacomponents/console-tools/src/dialog/menu_dialog.php',
                'ezcconsolemenudialogdefaultvalidator' => '/../vendor/zetacomponents/console-tools/src/dialog/validators/menu_dialog_default.php',
                'ezcconsolemenudialogoptions' => '/../vendor/zetacomponents/console-tools/src/options/menu_dialog.php',
                'ezcconsolemenudialogvalidator' => '/../vendor/zetacomponents/console-tools/src/interfaces/menu_dialog_validator.php',
                'ezcconsolenopositionstoredexception' => '/../vendor/zetacomponents/console-tools/src/exceptions/no_position_stored.php',
                'ezcconsolenovaliddialogresultexception' => '/../vendor/zetacomponents/console-tools/src/exceptions/no_valid_dialog_result.php',
                'ezcconsoleoption' => '/../vendor/zetacomponents/console-tools/src/input/option.php',
                'ezcconsoleoptionalreadyregisteredexception' => '/../vendor/zetacomponents/console-tools/src/exceptions/option_already_registered.php',
                'ezcconsoleoptionargumentsviolationexception' => '/../vendor/zetacomponents/console-tools/src/exceptions/option_arguments_violation.php',
                'ezcconsoleoptiondependencyviolationexception' => '/../vendor/zetacomponents/console-tools/src/exceptions/option_dependency_violation.php',
                'ezcconsoleoptionexception' => '/../vendor/zetacomponents/console-tools/src/exceptions/option.php',
                'ezcconsoleoptionexclusionviolationexception' => '/../vendor/zetacomponents/console-tools/src/exceptions/option_exclusion_violation.php',
                'ezcconsoleoptionmandatoryviolationexception' => '/../vendor/zetacomponents/console-tools/src/exceptions/option_mandatory_violation.php',
                'ezcconsoleoptionmissingvalueexception' => '/../vendor/zetacomponents/console-tools/src/exceptions/option_missing_value.php',
                'ezcconsoleoptionnoaliasexception' => '/../vendor/zetacomponents/console-tools/src/exceptions/option_no_alias.php',
                'ezcconsoleoptionnotexistsexception' => '/../vendor/zetacomponents/console-tools/src/exceptions/option_not_exists.php',
                'ezcconsoleoptionrule' => '/../vendor/zetacomponents/console-tools/src/structs/option_rule.php',
                'ezcconsoleoptionstringnotwellformedexception' => '/../vendor/zetacomponents/console-tools/src/exceptions/option_string_not_wellformed.php',
                'ezcconsoleoptiontoomanyvaluesexception' => '/../vendor/zetacomponents/console-tools/src/exceptions/option_too_many_values.php',
                'ezcconsoleoptiontypeviolationexception' => '/../vendor/zetacomponents/console-tools/src/exceptions/option_type_violation.php',
                'ezcconsoleoutput' => '/../vendor/zetacomponents/console-tools/src/output.php',
                'ezcconsoleoutputformat' => '/../vendor/zetacomponents/console-tools/src/structs/output_format.php',
                'ezcconsoleoutputformats' => '/../vendor/zetacomponents/console-tools/src/structs/output_formats.php',
                'ezcconsoleoutputoptions' => '/../vendor/zetacomponents/console-tools/src/options/output.php',
                'ezcconsoleprogressbar' => '/../vendor/zetacomponents/console-tools/src/progressbar.php',
                'ezcconsoleprogressbaroptions' => '/../vendor/zetacomponents/console-tools/src/options/progressbar.php',
                'ezcconsoleprogressmonitor' => '/../vendor/zetacomponents/console-tools/src/progressmonitor.php',
                'ezcconsoleprogressmonitoroptions' => '/../vendor/zetacomponents/console-tools/src/options/progressmonitor.php',
                'ezcconsolequestiondialog' => '/../vendor/zetacomponents/console-tools/src/dialog/question_dialog.php',
                'ezcconsolequestiondialogcollectionvalidator' => '/../vendor/zetacomponents/console-tools/src/dialog/validators/question_dialog_collection.php',
                'ezcconsolequestiondialogmappingvalidator' => '/../vendor/zetacomponents/console-tools/src/dialog/validators/question_dialog_mapping.php',
                'ezcconsolequestiondialogoptions' => '/../vendor/zetacomponents/console-tools/src/options/question_dialog.php',
                'ezcconsolequestiondialogregexvalidator' => '/../vendor/zetacomponents/console-tools/src/dialog/validators/question_dialog_regex.php',
                'ezcconsolequestiondialogtypevalidator' => '/../vendor/zetacomponents/console-tools/src/dialog/validators/question_dialog_type.php',
                'ezcconsolequestiondialogvalidator' => '/../vendor/zetacomponents/console-tools/src/interfaces/question_dialog_validator.php',
                'ezcconsolestandardinputvalidator' => '/../vendor/zetacomponents/console-tools/src/input/validators/standard.php',
                'ezcconsolestatusbar' => '/../vendor/zetacomponents/console-tools/src/statusbar.php',
                'ezcconsolestatusbaroptions' => '/../vendor/zetacomponents/console-tools/src/options/statusbar.php',
                'ezcconsolestringtool' => '/../vendor/zetacomponents/console-tools/src/tools/string.php',
                'ezcconsoletable' => '/../vendor/zetacomponents/console-tools/src/table.php',
                'ezcconsoletablecell' => '/../vendor/zetacomponents/console-tools/src/table/cell.php',
                'ezcconsoletableoptions' => '/../vendor/zetacomponents/console-tools/src/options/table.php',
                'ezcconsoletablerow' => '/../vendor/zetacomponents/console-tools/src/table/row.php',
                'ezcconsoletoomanyargumentsexception' => '/../vendor/zetacomponents/console-tools/src/exceptions/argument_too_many.php',
                'theseer\\autoload\\application' => '/Application.php',
                'theseer\\autoload\\applicationexception' => '/Application.php',
                'theseer\\autoload\\autoloadbuilderexception' => '/AutoloadRenderer.php',
                'theseer\\autoload\\autoloadrenderer' => '/AutoloadRenderer.php',
                'theseer\\autoload\\cache' => '/Cache.php',
                'theseer\\autoload\\cacheentry' => '/CacheEntry.php',
                'theseer\\autoload\\cacheexception' => '/Cache.php',
                'theseer\\autoload\\cachewarminglistrenderer' => '/CacheWarmingListRenderer.php',
                'theseer\\autoload\\cachingparser' => '/CachingParser.php',
                'theseer\\autoload\\classdependencysorter' => '/DependencySorter.php',
                'theseer\\autoload\\classdependencysorterexception' => '/DependencySorter.php',
                'theseer\\autoload\\cli' => '/CLI.php',
                'theseer\\autoload\\clienvironmentexception' => '/CLI.php',
                'theseer\\autoload\\collector' => '/Collector.php',
                'theseer\\autoload\\collectorexception' => '/Collector.php',
                'theseer\\autoload\\collectorresult' => '/CollectorResult.php',
                'theseer\\autoload\\collectorresultexception' => '/CollectorResult.php',
                'theseer\\autoload\\composeriterator' => '/ComposerIterator.php',
                'theseer\\autoload\\composeriteratorexception' => '/ComposerIterator.php',
                'theseer\\autoload\\config' => '/Config.php',
                'theseer\\autoload\\factory' => '/Factory.php',
                'theseer\\autoload\\logger' => '/Logger.php',
                'theseer\\autoload\\parser' => '/Parser.php',
                'theseer\\autoload\\parseresult' => '/ParseResult.php',
                'theseer\\autoload\\parserexception' => '/Parser.php',
                'theseer\\autoload\\parserinterface' => '/ParserInterface.php',
                'theseer\\autoload\\pathcomparator' => '/PathComparator.php',
                'theseer\\autoload\\pharbuilder' => '/PharBuilder.php',
                'theseer\\autoload\\sourcefile' => '/SourceFile.php',
                'theseer\\autoload\\staticlistrenderer' => '/StaticListRenderer.php',
                'theseer\\autoload\\staticrenderer' => '/StaticRenderer.php',
                'theseer\\autoload\\staticrequirelistrenderer' => '/StaticRequireListRenderer.php',
                'theseer\\autoload\\version' => '/Version.php',
                'theseer\\directoryscanner\\directoryscanner' => '/../vendor/theseer/directoryscanner/src/directoryscanner.php',
                'theseer\\directoryscanner\\exception' => '/../vendor/theseer/directoryscanner/src/directoryscanner.php',
                'theseer\\directoryscanner\\filesonlyfilteriterator' => '/../vendor/theseer/directoryscanner/src/filesonlyfilter.php',
                'theseer\\directoryscanner\\includeexcludefilteriterator' => '/../vendor/theseer/directoryscanner/src/includeexcludefilter.php',
                'theseer\\directoryscanner\\phpfilteriterator' => '/../vendor/theseer/directoryscanner/src/phpfilter.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd

CREATE TABLE tt_content
(
    dateRangeStart int(11) DEFAULT '0' NOT NULL,
    dateRangeEnd   int(11) DEFAULT '0' NOT NULL
);

CREATE TABLE tt_address_productgroup_mm
(
    uid_local       int(11) unsigned DEFAULT '0' NOT NULL,
    uid_foreign     int(11) unsigned DEFAULT '0' NOT NULL,
    sorting         int(11) unsigned DEFAULT '0' NOT NULL,
    sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid_local, uid_foreign),
    KEY uid_local (uid_local),
    KEY uid_foreign (uid_foreign)
);
CREATE TABLE tt_address
(
    product_groups int(11) unsigned DEFAULT '0'
);

CREATE TABLE tx_trawtheme_domain_model_productgroup
(
    uid          int(11) unsigned             NOT NULL auto_increment,
    pid          int(11) unsigned DEFAULT '0' NOT NULL,
    tstamp       int(11) unsigned DEFAULT '0' NOT NULL,
    hidden       tinyint(4)       DEFAULT '1' NOT NULL,
    deleted      tinyint(4)       DEFAULT '0' NOT NULL,

    label        varchar(64)      DEFAULT ''  NOT NULL,
    path_segment text,

    PRIMARY KEY (uid),
    KEY parent (pid)
);
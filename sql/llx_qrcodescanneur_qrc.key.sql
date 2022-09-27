-- Copyright (C) ---Put here your own copyright and developer email---
--
-- This program is free software: you can redistribute it and/or modify
-- it under the terms of the GNU General Public License as published by
-- the Free Software Foundation, either version 3 of the License, or
-- (at your option) any later version.
--
-- This program is distributed in the hope that it will be useful,
-- but WITHOUT ANY WARRANTY; without even the implied warranty of
-- MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
-- GNU General Public License for more details.
--
-- You should have received a copy of the GNU General Public License
-- along with this program.  If not, see https://www.gnu.org/licenses/.


-- BEGIN MODULEBUILDER INDEXES
ALTER TABLE llx_qrcodescanneur_qrc ADD INDEX idx_qrcodescanneur_qrc_rowid (rowid);
ALTER TABLE llx_qrcodescanneur_qrc ADD INDEX idx_qrcodescanneur_qrc_ref (ref);
-- END MODULEBUILDER INDEXES

--ALTER TABLE llx_qrcodescanneur_qrc ADD UNIQUE INDEX uk_qrcodescanneur_qrc_fieldxy(fieldx, fieldy);

--ALTER TABLE llx_qrcodescanneur_qrc ADD CONSTRAINT llx_qrcodescanneur_qrc_fk_field FOREIGN KEY (fk_field) REFERENCES llx_qrcodescanneur_myotherobject(rowid);

